<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comics</title>
        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        {{-- style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        @include('partials.header')
        
        <main class='pt-5 mt-3'>
            @yield('content')
        </main>
        
        @include('partials.footer')

    </body>
</html>