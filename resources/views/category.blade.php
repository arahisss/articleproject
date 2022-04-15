@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
  <p class="lead my-3"></p>


  <h2 class="blog-post-title pb-3">Статьи на тему: {{ $current_category->title }}</h2>

  @foreach($articles as $article)
    @include('inc.article_block', compact($article))
  @endforeach

  <div class=" d-flex justify-content-between" >
    {{ $articles->links() }}
  </div>

@endsection
