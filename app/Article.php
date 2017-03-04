<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    //
    protected $table = 'article';

    protected $fillable = ['title', 'author', 'description', 'content'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }

    public function deleteC()
    {
        return($this->hasMany(Comment::class)->delete());
    }

}
