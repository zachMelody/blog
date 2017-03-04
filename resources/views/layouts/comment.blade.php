<hr />
{{-- 评论框 --}}
<div class="content">
    <form method="post" action="/article/detail/{{ $article->id }}/comments">

            {{ csrf_field() }}

            <p><label>评论</label></p>
            <div>
                <label>Email或昵称</label>
                <input type="text" name="user_id" id="user_id">
            </div>
            <textarea cols="100" rows="20" name="body" id="body"></textarea>

        <input type="submit">



    </form>
    @include('parts.alert')
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