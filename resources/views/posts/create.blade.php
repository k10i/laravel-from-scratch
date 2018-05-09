@extends('layout')

@section('content')
<form method="post" action="/posts">
    {{ csrf_field() }}
    <div>
        <label>タイトル</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>本文</label>
        <textarea name="body"></textarea>
    </div>
    <input type="submit" value="登録">
</form>

@if (count($errors))
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif

@endsection
