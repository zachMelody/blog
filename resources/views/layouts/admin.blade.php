<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<title>管理页面 -- @yield('title')</title>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="/admin/article">首页</a></li>
            <li><a href="/admin/article/create">增加</a></li>
            <li>当前用户：{{ Auth::user() }}</li>
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    登出
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
    @include('parts.alert')
    @yield('content')


</body>
</html>