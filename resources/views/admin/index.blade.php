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
                        <a href="{{ url('admin/article/'.$article->id.'/edit') }}">修改</a>
                        <form action="{{ url('admin/article/'.$article->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div>
            {{ $articles->render() }}
        </div>
        @stop