<!doctype html>
<html lang="{{ $settings->short_locale }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $settings->site_name }}</title>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/site.css') }}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/libs/flexslider/flexslider.css') }}">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="{{ Vite::asset('resources/libs/flexslider/jquery.flexslider-min.js') }}"></script>
    </head>
    <body class="bg-gray-100 font-sans leading-normal text-gray-800">
        @yield('body')
        @section('scripts')
            <script src="{{ Vite::asset('resources/js/site.js') }}"></script>
        @show

        <script>
            (function($){
                $(window).load(function() {

                    $('#slider').flexslider({
                        animation: "slide"
                    });
                });
            })(jQuery);
        </script>
    </body>
</html>
