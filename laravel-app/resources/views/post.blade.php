@extends('layouts/main')

@section('container')
<article>
    @foreach ($posts as $pos)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $pos["slug"] }}">{{ $pos["title"] }}</a>
        </h2>
        <h5>By: </h5>
        <p>{{ $pos["body"] }}</p>
    </article>
</article>
<a href="/posts">Back to Posts</a>
@endsection