<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @isset($title)
            {{ $title }} |
            @endisset
            TeleConsult
        </title>
        <style>
            #root{
                padding-bottom: 70px;
            }
            .slap__bt-page{
                /*position: absolute;*/
                position: fixed;
                bottom: 0;
                width: 100%;
            }
        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-light">
        @include('layout.nav')
        <div id="root" class="container pt-lg-5 mt-lg-5 ">
            @yield('content')
        </div>
        @include('layout.footer')

    </body>
</html>
