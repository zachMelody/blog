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
            <li><a href="/admin/index">首页</a></li>
            <li><a href="/admin/add">增加</a></li>
        </ul>
    </div>
    @include('layouts.alert')
    @yield('content')


</body>
</html>