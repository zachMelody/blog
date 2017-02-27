@extends('layouts.admin')
@section('title', '修改')
@section('content')
    <div class="content">
        <form method="post" action="">

            <div>
                {{ csrf_field() }}
                <label>标题</label>
                <input type="text" name="article[title]" id="title" value="{{ $article->title }}">
            </div>
            <div>
                <label>作者</label>
                <input type="text" name="article[author]" id="author" value="{{ $article->author }}">
            </div>

            <div>
                <label>内容</label>
                <textarea cols="100" rows="20" name="article[content]" id="content">{{ $article->content }}</textarea>
            </div>
            <input type="submit">


        </form>

    </div>
@stop