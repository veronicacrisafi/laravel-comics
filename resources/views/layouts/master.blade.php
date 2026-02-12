<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Laravel-comics</title>
</head>

<body>
    @include('partials.header')
    @yield('contenuto')
    @yield('contenutoCard')
    @include('partials.store')
    @include('partials.info')
    @include('partials.footer')

</body>

</html>
