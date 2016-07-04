@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container">
        <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float:left; border-radius: 50%; " alt="">
        <h1>{{ $user->name }}'s profile</h1>
        <form action="/profile" method="POST" enctype="multipart/form-data">
            <input type="file" name="avatar" class="file">
            <input type="submit" name="submit" value="Upload" class="pull-right btn btn-small btn-primary">
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection