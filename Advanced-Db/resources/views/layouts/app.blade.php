<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <style>
        table{
            border-collapse: collapse;
        }
        tr, td,th{
            border: 1px solid black;
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Header content here -->
    </header>

    <nav>
        <!-- Navigation menu here -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content here -->
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
