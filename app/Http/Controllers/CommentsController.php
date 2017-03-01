<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentsController extends Controller
{

    public function create(Article $article)
    {

        $this->validate(request(), ['body' => 'required']);

        Comment::create([
           'body' => request('body'),
            'article_id' => $article->id,
            'user_id' => 233,
        ]);

        return back();
    }
}
