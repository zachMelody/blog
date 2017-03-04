<hr />
{{-- 评论框 --}}
<div class="content">
    <form method="post" action="/article/detail/{{ $article->id }}/comments">

            {{ csrf_field() }}

            <p><label>评论</label></p>
            <textarea cols="100" rows="20" name="body" id="body"></textarea>

        <input type="submit">



    </form>
    <div>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
</div>
<hr />
<div>
    <ul>
        @foreach($article->comments as $comment)
            <h2><em>{{ $comment->created_at->diffForHumans() }}</em>----by {{ $comment->user_id }} </h2>
            <li>{{ $comment->body }}</li>
        @endforeach
    </ul>
</div>
@include('layouts.alert')