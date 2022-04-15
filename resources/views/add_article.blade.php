@extends('layouts.app')

@section('title-block')Добавить статью@endsection

@section('content')
  <h1>Добавьте свою статью</h1>

  <form  action="{{ route('user.add_article') }}" method="post">
    @csrf

    @include('inc.messages')

    <div class="form-group">
      <label class="pb-1" for="title">Введите тему</label>
      <input class="form-control" required  style="margin-bottom: 10px;" type="text" name="title" placeholder="Тема"  id="title">
    </div>

    <div class="form-group">
      <label class="pb-1" for="article-category">Введите категорию</label>
      <input class="form-control" required  style="margin-bottom: 10px;" type="text" name="article-category" placeholder="Категория"  id="article-category">
    </div>

    <div class="form-group">
      <label class="pb-1" for="article-text">Текст статьи</label>
      <textarea name="article-text" required id="article-text" class="form-control" style="margin-bottom: 20px;" placeholder="Текст" rows="8" cols="80"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>

  </form>
@endsection
