<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @isset($title)
        {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
        <div id="root" class="container pt-lg-5 mt-lg-5 pb-lg-5">
            @yield('content')
        </div>
</body>
</html>
