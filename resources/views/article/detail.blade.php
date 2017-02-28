@extends('layouts.article')
@section('title', '详情')
@section('content')
    <div>
        <h1>{{ $article->title }}</h1>
        <h3>{{ $article->author }} {{date('Y-m-d H:i:s', $article->created_at) }}</h3>
        <p>{{ $article->content }}</p>
    </div>