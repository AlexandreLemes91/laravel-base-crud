@extends('layouts.main')

@section('content')
    <div class="error">
        <h1>404</h1>
        <h3>{{ $exception->getMessage() }}</h3>
    </div>
@endsection