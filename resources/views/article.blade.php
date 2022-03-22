@extends('template')

@section('container')
    <h1>{{ $title }}</h1>
    <hr/>
    @foreach($articles as $article)
        <article class="mb-5 border-bottom pb-3">
            <h3>
                <a href="/article/{{ $article->slug }}">
                {{ $article->title }}
                </a>                    
            </h3>
            <h6>By: <a class="text-decoration-none" href="/authors/{{ $article->user->username }}">{{ $article->user->name }}</a> in 
                <a class="text-decoration-none" href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6>
            <p>{{ $article->excerpt }}</p>

            <a href="/article/{{ $article->slug }}">
                Read more..
            </a>
        </article>
    @endforeach
@endsection
