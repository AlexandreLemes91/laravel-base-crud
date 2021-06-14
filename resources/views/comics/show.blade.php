@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-3">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-9">
                <ul>
                    <li>
                        <h2>{{ $comic->title }}</h2>
                    </li>
                    <li>{{ $comic->type}}</li>
                    <li>{{ $comic->series}}</li>
                    <li>{{ $comic->sale_date}}</li>
                    <li>{{ $comic->price}}</li>
                </ul>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection