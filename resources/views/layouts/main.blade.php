<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('img/logo.ico')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">

    <link type="text/css" href="{{asset('styles/styles.css')}}" rel="stylesheet" />

    <title>NIvanaev</title>
</head>


<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>

<script src="{{asset('scripts/modal.js')}}"></script>

</html>