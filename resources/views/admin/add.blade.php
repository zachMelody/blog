@extends('layouts.admin')
    @section('title', '新增')
    @section('content')
        <div class="content">
            <form method="post" action="">

                <div>
                    {{ csrf_field() }}
                    <label>标题</label>
                    <input type="text" name="title" id="title">
                </div>
                <div>
                    <label>作者</label>
                    <input type="text" name="author" id="author">
                </div>

                <div>
                    <label>内容</label>
                    <textarea cols="100" rows="20" name="content" id="content"></textarea>
                </div>
                <input type="submit">



            </form>
            <div>
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
        @stop