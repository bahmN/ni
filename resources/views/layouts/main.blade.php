<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('styles/styles.css')}}">
    <link rel="icon" href="{{asset('img/logo.ico')}}">
    <title>NI</title>
</head>

<body>
    <div class="wrapper">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
</body>

<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="{{asset('scripts/app.js')}}"></script>

</html>