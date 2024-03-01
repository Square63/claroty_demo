@extends('layout')

@section('body')

<div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
    <article class="mt-4 bg-white p-8 w-3/5">
        <div class="flex space-x-2">
            <h1 class="flex items-center font-bold text-4xl w-1/2">{{ $title }}</h1>
            <a href="/">
                <svg width="160" height="161" viewBox="0 0 160 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M70.9087 41.7158V33.606C46.377 37.3192 27.5752 58.4958 27.5752 84.0638H35.5752C35.5752 62.9251 50.8161 45.3461 70.9087 41.7158ZM78.6105 98.0686C70.8758 98.0686 64.6057 91.7985 64.6057 84.0638C64.6057 76.3292 70.8758 70.0591 78.6105 70.0591C86.3451 70.0591 92.6152 76.3292 92.6152 84.0638C92.6152 91.7985 86.3451 98.0686 78.6105 98.0686ZM78.6105 106.069C66.4576 106.069 56.6057 96.2167 56.6057 84.0638C56.6057 71.9109 66.4576 62.0591 78.6105 62.0591C90.7634 62.0591 100.615 71.9109 100.615 84.0638C100.615 96.2167 90.7634 106.069 78.6105 106.069ZM28.3809 93.1408H36.5351C40.7021 112.55 57.9576 127.099 78.6113 127.099C85.9842 127.099 92.9131 125.248 98.9703 121.989L102.761 129.034C95.5673 132.905 87.3396 135.099 78.6113 135.099C53.5232 135.099 32.6632 116.996 28.3809 93.1408ZM128.841 93.1408H120.687C118.553 103.083 112.985 111.75 105.276 117.844L110.238 124.12C119.799 116.561 126.596 105.641 128.841 93.1408Z" fill="#8815FF"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M70.9087 41.7158V33.606C46.377 37.3192 27.5752 58.4958 27.5752 84.0638H35.5752C35.5752 62.9251 50.8161 45.3461 70.9087 41.7158ZM78.6105 98.0686C70.8758 98.0686 64.6057 91.7985 64.6057 84.0638C64.6057 76.3292 70.8758 70.0591 78.6105 70.0591C86.3451 70.0591 92.6152 76.3292 92.6152 84.0638C92.6152 91.7985 86.3451 98.0686 78.6105 98.0686ZM78.6105 106.069C66.4576 106.069 56.6057 96.2167 56.6057 84.0638C56.6057 71.9109 66.4576 62.0591 78.6105 62.0591C90.7634 62.0591 100.615 71.9109 100.615 84.0638C100.615 96.2167 90.7634 106.069 78.6105 106.069ZM28.3809 93.1408H36.5351C40.7021 112.55 57.9576 127.099 78.6113 127.099C85.9842 127.099 92.9131 125.248 98.9703 121.989L102.761 129.034C95.5673 132.905 87.3396 135.099 78.6113 135.099C53.5232 135.099 32.6632 116.996 28.3809 93.1408ZM128.841 93.1408H120.687C118.553 103.083 112.985 111.75 105.276 117.844L110.238 124.12C119.799 116.561 126.596 105.641 128.841 93.1408Z" fill="url(#paint0_linear_3547_26982)"/>
                    <g style="mix-blend-mode:multiply">
                        <path d="M142.424 84.0638C142.424 48.8204 113.854 20.25 78.6104 20.25L78.6104 84.0638H142.424Z" fill="#F9C930"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_3547_26982" x1="35.7492" y1="30.9991" x2="126.251" y2="135.098" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#E217B7"/>
                            <stop offset="1" stop-color="#8815FF"/>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
        </div>
        <div id="slider">
            <ul class="slides">
                @foreach(Statamic::tag('collection:slide') as $entry)
                    <li>
                        <div class="flex gap-4">
                            <div class="slide bg-gray-200 p-8">
                                <img src="{{ $entry->slide_image[0] }}" alt="{{ $entry->slide_image[0]->alt ?? 'Image' }}">
                            </div>
                            <div class="content">
                                <h2 class="text-2xl font-bold">{{ $entry->title }}</h2>
                                {!! $entry->content !!}
                                <div class="slide-count">
                                    <span id="current"></span> / <span id="total"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </article>
</div>

<script>
    (function($){
        $(window).load(function() {
            $('#slider').flexslider({
                animation: "fade",
                slideshow: false,
                directionNav: true,
                controlNav: false,
                start: function(slider) {
                    $('#slider .slide-count #current').text(slider.currentSlide + 1);
                    $('#slider .slide-count #total').text(slider.count) + 1;
                },
                after: function(slider) {
                    $('#slider .slide-count #current').text(slider.currentSlide + 1);
                }
            });
        });
    })(jQuery);
</script>

@endsection