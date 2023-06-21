<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
      
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body class="antialiased light-mode">
        @include('./partials/_header')
        @yield('content')
        <footer class="footer">
            <p class="text-footer">Todos los derechos reservados</p>
        </footer>

        <script src="{{asset('js/menu.js')}}"></script>
        <script src="{{asset('js/mode.js')}}"></script>
    </body>
</html>
