<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::paginate(6);

        return view('article.index', [
            'articles' => $articles
        ]);
    }

    public function detail($id)
    {

        $article = Article::find($id);

        return view('article.detail', ['article' => $article]);
    }
}
