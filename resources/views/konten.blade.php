@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $article->title }}                   
    </h3>
    <h6>By: <a class="text-decoration-none" href="/authors/{{ $article->user->username }}">{{ $article->user->name }}</a> in <a class="text-decoration-none" href='/categories/{{ $article->category->slug }}'>{{ $article->category->name }}</a></h6>
    <p>{{ $article->body }}</p>
</article>
@endsection
