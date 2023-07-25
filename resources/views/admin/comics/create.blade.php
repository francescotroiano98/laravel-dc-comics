@extends('layouts.app')

@section('title', 'Create Comic Page')

@section('main-content')
<div class="container">
    <div class="row comics justify-content-around">
        <div class="col-8">
            <h1>Create a new comic</h1>
        </div>

        <form class="col-8" action="{{ route('admin.comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Create new comic</button>
            <button type="reset" class="btn btn-warning">Reset fields</button>
        </form>
    </div>
</div>
@endsection