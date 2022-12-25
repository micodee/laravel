{{-- @dd($posts) --}}

@extends('layouts/main')

@section('container')
    @foreach ($posts as $pos)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $pos["slug"] }}">{{ $pos["title"] }}</a>
        </h2>
        <h5>By: {{ $pos["author"] }}</h5>
        <p>{{ $pos["body"] }}</p>
    </article>
    @endforeach
@endsection

