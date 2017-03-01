<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::latest()->paginate(6);

        return view('article.index', ['articles' => $articles]);
    }

    public function detail(Article $article)
    {

        return view('article.detail', ['article' => $article]);
    }
}
