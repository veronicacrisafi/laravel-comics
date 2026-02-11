<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Laravel-comics</title>
</head>

<body>
    <div class="container">
        @include('partials.header')
        @yield('contenuto')
    </div>
    @include('partials.store')
    @include('partials.footer')

</body>

</html>
