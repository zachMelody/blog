@extends('layouts.admin')
    @section('title', '新增')
    @section('content')
        <div class="content">
            <form method="post" action="">

                <div>
                    {{ csrf_field() }}
                    <label>标题</label>
                    <input type="text" name="article[title]" id="title" value="11">
                </div>
                <div>
                    <label>作者</label>
                    <input type="text" name="article[author]" id="author">
                </div>

                <div>
                    <label>内容</label>
                    <textarea cols="100" rows="20" name="article[content]" id="content"></textarea>
                </div>
                <input type="submit">



            </form>

        </div>
        @stop