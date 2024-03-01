@extends('layout')

@section('body')


<div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
    <article class="mt-4 bg-white p-8 max-w-xl prose">
        {!! $content !!}
    </article>
</div>

@endsection
