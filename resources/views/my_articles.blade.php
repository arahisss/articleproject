@extends('layouts.app')
@section('title-block')Статья@endsection

@section('content')
  @if (count($articles))
    <h2 class="blog-post-title">Мои статьи</h2>
    @include('inc.messages')

    @foreach($articles as $article)
      @include('inc.my_article_block', compact($article))
    @endforeach
  @else
    <h2 class="blog-post-title">У вас пока нет статей :(</h2>
  @endif

@endsection
