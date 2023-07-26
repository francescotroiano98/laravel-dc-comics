@extends('layouts.app')

@section('title', 'Admin Comic Index')
@section('main-top-content')
<section class="container">
    <div class="row w-100">
        <div class="col-12 comics-index d-flex flex-wrap justify-content-between align-items-center">
            <h1>
                Admin Comic Index Panel
            </h1>
            <button type="button" class="btn btn-light"><a href="{{ route('admin.comics.create')}}">Create New Comic</a></button>
            @if (session('delete'))
            <div class="col-12">
                <div class="alert alert-warning">
                    {{ session('delete') }} has been deleted succesfully
                </div>
            </div>
        @elseif ( session('created'))
            <div class="col-12">
                <div class="alert alert-primary">
                    {{ session('created') }} has been created succesfully
                </div>
            </div>
        @elseif ( session('restored'))
            <div class="col-12">
                <div class="alert alert-primary">
                    {{ session('restored') }} has been restored succesfully
                </div>
            </div>
        @endif
        </div>
    </div>
</section>

@endsection
@section('main-content')
<div class="container">
    
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover text-center table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">
                                {{ $comic->id }}
                            </th>
                            <td>
                                {{ $comic->title }}
                            </td>
                            <td>
                                {{ $comic->series }}
                            </td>
                            <td>
                                {{ $comic->price }}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary me-2"
                                    href="{{ route('admin.comics.show', $comic->id) }}">
                                    View
                                </a>
                                <a class="btn btn-sm btn-success me-2" href="{{ route('admin.comics.edit', $comic->id) }}">
                                    Edit
                                </a>
                                <form action="{{ route('admin.comics.destroy', $comic->id) }}" class="d-inline form-terminator" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-warning me-2">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
</div>
@endsection
@section('custom-scripts')
    <script>
        const deleteFormElements = document.querySelectorAll('form.form-terminator');
        deleteFormElements.forEach(formElement => {
            formElement.addEventListener('submit', function(event) {
                event.preventDefault();
                const userConfirm = window.confirm('Are you sure you want to delete this comic?');
                if (userConfirm){
                    this.submit();
                }
            });
        });
    </script>
@endsection