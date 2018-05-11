@extends('layout')

@section('content')
<form method="post" action="/register">
    {{ csrf_field() }}
    <div>
        name:
        <input type="text" name="name" required>
    </div>
    <div>
        email:
        <input type="email" name="email" required>
    </div>
    <div>
        password:
        <input type="password" name="password" required>
    </div>
    <div>
        password confirmation:
        <input type="password" name="password_confirmation" required>
    </div>

    @include('layouts.errors')
    <input type="submit" value="登録">
</form>

@endsection
