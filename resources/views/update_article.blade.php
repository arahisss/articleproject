@extends('layouts.app')

@section('title-block')Редактировать статью@endsection

@section('content')
  <h1>Редактировать статью</h1>


  <form  action="{{ route('user.update_article', $article->id) }}" method="post">
    @csrf

    @include('inc.messages')

      <div class="form-group">
        <label class="pb-1" for="title">Введите тему</label>
        <input class="form-control" required  style="margin-bottom: 10px;" value="{{ $article->title }}" type="text" name="title" placeholder="Тема"  id="title">
      </div>

      <div class="form-group">
        <label class="pb-1" for="article-category">Введите категорию</label>
        <input class="form-control" required  style="margin-bottom: 10px;" value="{{ $article->getCategory()->title }}" type="text" name="article-category" placeholder="Категория"  id="article-category">
      </div>

      <div class="form-group">
        <label class="pb-1" for="article-text">Текст статьи</label>
        <textarea name="article-text" required id="article-text"  class="form-control" style="margin-bottom: 20px;" placeholder="Текст" rows="15" cols="80">{{ $article->text }}</textarea>
      </div>

    <button type="submit" class="btn btn-success">Редактировать</button>

  </form>
@endsection
