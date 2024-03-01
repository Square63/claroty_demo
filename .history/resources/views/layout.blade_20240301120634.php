<!doctype html>
<html lang="{{ $settings->short_locale }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? $settings->site_name }}</title>
        @section('styles')
            <!-- Default CSS files -->
            <link rel="stylesheet" href="{{ mix('css/site.css') }}">
        @show
    </head>
    <body class="bg-gray-100 font-sans leading-normal text-gray-800">
        <div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
            @yield('body')
        </div>
    </body>
</html>
