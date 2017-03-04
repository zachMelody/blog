<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['user_id', 'body', 'article_id'];

    public function post()
    {

        return $this->belongsTo(Article::class);
    }


}
