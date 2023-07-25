@extends('layouts.app')

@section('title', 'Single comic page')
@section('main-top-content')
    <section class="container">
        <div class="row">
            <div class="col-12 comics-index">
                <h1>
                    Comic: {{ $comic->title }}
                </h1>
            </div>
        </div>
    </section>
@endsection
@section('main-content')
<div class="container">
    
    <div class="row comics justify-content-around">
        <article class="card col-12 p-0 m-3">

            <img src="{{ $comic->thumb }}" class="card-img-top w-25" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $comic->title }}
                </h5>
                <h6>
                    ID : {{ $comic->id }}
                </h6>
                <p class="card-text">
                    {{ $comic->description }}
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Series: {{ $comic->series }}
                </li>
                <li class="list-group-item">
                    Price: {{ $comic->price }}
                </li>
                <li class="list-group-item">
                    Sale Date: {{ $comic->sale_date }}
                </li>
                <li class="list-group-item">
                    Type: {{ $comic->type }}
                </li>
                <li class="list-group-item">
                    Artists: {{ $comic->artists }}
                </li>
                <li class="list-group-item">
                    Writers: {{ $comic->writers }}
                </li>
            </ul>
        </article>
    </div>
</div>
@endsection