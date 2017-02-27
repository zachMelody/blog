@extends('layouts.admin')
@section('title', '主页')
    @section('content')
        <div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>标题</td>
                    <td>作者</td>
                    <td>内容</td>
                    <td>时间</td>
                    <td>操作</td>
                </tr>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->author }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        <a href="{{ url('admin/modify', ['id' => $article->id ]) }}">修改</a>
                        <a href="{{ url('admin/delete', ['id' => $article-> id]) }}">删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div>
            {{ $articles->render() }}
        </div>
        @stop