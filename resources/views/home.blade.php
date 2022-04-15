@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">{{ $articles->first()->title }}</h1>
        <p class="lead my-3">
          {{mb_substr($articles->first()->text, 0, 173) }}</p>
        <p class="lead mb-0">
          <a href="{{ route('article', [$articles->first()->category->code, $articles->first()->id]) }}" class="text-white fw-bold">Продолжить чтение...</a>
        </p>
      </div>
    </div>
    <h2 class="blog-post-title pb-3">Топ читаемых статей:</h2>

    @foreach($articles as $article)
      @include('inc.article_block', compact($article))
    @endforeach

@endsection
