@extends('layouts.app')
@section('content')
    <h2 class="pb-4 mb-4 fst-italic border-bottom">
        Новости категории {{$category->title}}
    </h2>
    @foreach($category->news as $news)
        <article class="blog-post">
            <h2 class="blog-post-title">{{$news->title}}</h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
            <p>{{$news->text}}</p>
        </article>
        <hr>
    @endforeach
@endsection