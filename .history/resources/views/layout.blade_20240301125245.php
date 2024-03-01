<!doctype html>
<html lang="{{ $settings->short_locale }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $settings->site_name }}</title>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/site.css') }}">
    </head>
    <body class="bg-gray-100 font-sans leading-normal text-gray-800">
        @yield('body')
        <script src="{{ Vite::asset('resources/js/site.js') }}"></script>
        <script src="{{ Vite::asset('resources/js/site.js') }}"></script>
    </body>
</html>
