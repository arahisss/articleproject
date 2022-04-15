<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\User_articles;



class MainController extends Controller {

  public function private() {
    $articles = Article::orderBy('views', 'desc')->limit(6)->get();
    $categories = Category::all();
    return view('home', compact('articles', 'categories'));
  }

  public function home() {
    $articles = Article::orderBy('views', 'desc')->limit(6)->get();
    $categories = Category::all();
    return view('home', compact('articles', 'categories'));
  }

  public function about() {
    $categories = new Category;
    return view('about', ['categories' => $categories->all()]);
  }

  public function contact() {
    return view('contact');
  }

  public function article($category, $id) {
    $article = Article::where('id', $id)->first();
    $article->views += 1;
    $article->save();
    $categories = Category::all();
    return view('article', compact('article', 'categories'));
  }

  public function category($category, $id) {
    $articles = Article::where('category_id', $id)->orderBy('views', 'desc')->simplePaginate(6);
    $categories = Category::all();
    $current_category = Category::find($id);
    return view('category', compact('articles', 'current_category', 'categories'));
  }

  public function view_add_article() {
    $categories = Category::all();
    return view('add_article', compact('categories'));
  }

  public function my_articles() {
    $user_articles = User_articles::select('article_id')->where('user_id', auth()->user()->id)->get();

    $articles = Article::whereIn('id', $user_articles)->orderBy('views', 'desc')->get();

    $categories = Category::all();
    return view('my_articles', compact('articles', 'categories'));
  }


}
