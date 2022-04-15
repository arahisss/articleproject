@extends('layouts.app')
@section('title-block')Статья@endsection

@section('content') 
  <article class="blog-post">
    <h2 class="blog-post-title">{{ $article->title }}</h2>
    <p class="blog-post-meta">{{ $article->created_at->format('d.m.Y, Время: H:i') }}<br>Автор: <a style="text-decoration: none;" href="#"> {{ $article->author }}</a></p>
    <hr>
    <p>{{ $article->text }}</p>


  </article>
@endsection
