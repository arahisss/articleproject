<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;
use App\Models\User_articles;


class ArticleController extends Controller {

  public function rules($article, $category) {
    if ($category == "Технологии" || $category == "технологии") {
      $article->category_id = 1;
    }
    elseif ($category == "Кулинария" || $category == "кулинария") {
      $article->category_id = 2;
    }
    elseif ($category == "Наука" || $category == "наука") {
      $article->category_id = 3;
    }
    elseif ($category == "Здоровье" || $category == "здоровье") {
      $article->category_id = 4;
    }
    elseif ($category == "Культура" || $category == "культура") {
      $article->category_id = 5;
    }
    elseif ($category == "Игры" || $category == "игры") {
      $article->category_id = 6;
    }
    elseif ($category == "История" || $category == "история") {
      $article->category_id = 7;
    }
    else {
      return redirect(route('user.add_article'))->with('category', 'Введите корректное значение категории!');
    }
    return 1;

  }

  public function add(Request $request) {
    $new_article = new Article();
    $user_articles = new User_articles();
    $user = auth()->user();

    $new_article->title = $request->input('title');
    $new_article->text = $request->input('article-text');
    $new_article->author = $user->name;

    $category = trim($request->input('article-category'));

    if ($category == "Технологии" || $category == "технологии") {
      $new_article->category_id = 1;
    }
    elseif ($category == "Кулинария" || $category == "кулинария") {
      $new_article->category_id = 2;
    }
    elseif ($category == "Наука" || $category == "наука") {
      $new_article->category_id = 3;
    }
    elseif ($category == "Здоровье" || $category == "здоровье") {
      $new_article->category_id = 4;
    }
    elseif ($category == "Культура" || $category == "культура") {
      $new_article->category_id = 5;
    }
    elseif ($category == "Игры" || $category == "игры") {
      $new_article->category_id = 6;
    }
    elseif ($category == "История" || $category == "история") {
      $new_article->category_id = 7;
    }
    else {
      return redirect()->back()->withErrors([
        'category' => 'Введите корректное значение категории!'
      ]);
    }

    $new_article->save();

    $user_articles->user_id = $user->id;
    $user_articles->article_id = $new_article->id;

    $user_articles->save();

    return redirect(route('user.my_articles'))->with('success', 'Статья успешно добавлена!');


  }

    public function update_article($id) {
      $article = Article::find($id);
      $categories = Category::all();

      return view('update_article', ['article' => $article], ['categories' => $categories]);
    }


    public function update_article_submit($id, Request $request) {
      $article = Article::find($id);

      $article->title = $request->input('title');
      $article->text = $request->input('article-text');

      $category = trim($request->input('article-category'));

      if ($category == "Технологии" || $category == "технологии") {
        $article->category_id = 1;
      }
      elseif ($category == "Кулинария" || $category == "кулинария") {
        $article->category_id = 2;
      }
      elseif ($category == "Наука" || $category == "наука") {
        $article->category_id = 3;
      }
      elseif ($category == "Здоровье" || $category == "здоровье") {
        $article->category_id = 4;
      }
      elseif ($category == "Культура" || $category == "культура") {
        $article->category_id = 5;
      }
      elseif ($category == "Игры" || $category == "игры") {
        $article->category_id = 6;
      }
      elseif ($category == "История" || $category == "история") {
        $article->category_id = 7;
      }
      else {
        return redirect()->back()->withErrors([
          'category' => 'Введите корректное значение категории!'
        ]);
      }

      $article->save();

      return redirect()->route('user.my_articles')->with('success', 'Статья успешно отредактирована!');
    }

    public function delete_article($id) {
      $article = Article::find($id)->delete();
      return redirect()->route('user.my_articles')->with('success', 'Статья успешно удалена!');

    }
}
