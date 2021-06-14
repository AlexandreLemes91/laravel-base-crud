@extends('layouts.main')

@section('content')
    <section class="container">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </a>
            </div>
        @endforeach
    </section>    
@endsection