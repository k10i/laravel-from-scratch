@extends('layout')

@section('content')
<form method="post" action="/tasks">
    {{ csrf_field() }}
    <input type="text" name="body">
    <input type="submit" value="登録">
</form>

@endsection
