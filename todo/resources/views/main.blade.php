<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo App</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
</head>
<body>
    @include('header')
    @include('error')
    @yield('content')
    @yield('task')
    @include('footer')
</body>
</html>