@extends('layouts.article')
@section('title', '列表')
@section('content')
    <table>
        <tr>
            <td>ID</td>
            <td>标题</td>
            <td>作者</td>
            <td>内容</td>
            <td>时间</td>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td><a href="{{ url('article/detail', ['id' => $article->id]) }}"> {{ $article->content }}</a></td>
                <td>{{ date('Y-m-d', $article->created_at) }}</td>
            </tr>
        @endforeach
    </table>
    <div>
        {{ $articles->render() }}
    </div>
@stop