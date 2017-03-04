<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentsController extends Controller
{

    public function create(Article $article)
    {

        $this->validate(request(), [
            'body' => 'required',
            'user_id' => 'required|max:200'
        ]);

        $boolean = Comment::create([
           'body' => request('body'),
            'article_id' => $article->id,
            'user_id' => request('user_id'),
        ]);

        if ($boolean) {
            return back()->with('success', '评论成功');
        } else {
            return back();
        }
    }
}
