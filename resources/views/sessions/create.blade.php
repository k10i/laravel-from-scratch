@extends('layout')

@section('content')
<h1>sign in</h1>

<form method="post" action="/login">
    {{ csrf_field() }}

    <div>
        email: <input type="email" name="email">
    </div>
    <div>
        password:
        <input type="password" name="password">
    </div>

    @include('layouts.errors')

    <input type="submit">

</form>
@endsection
