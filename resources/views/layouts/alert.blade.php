@if (Session::has('success'))
    <!-- 成功提示框 -->
    <div>
        <strong>成功!</strong> {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('failure'))
    <!-- 失败提示框 -->
    <div>
        <strong>失败!</strong> {{ Session::get('failure') }}
    </div>
@endif