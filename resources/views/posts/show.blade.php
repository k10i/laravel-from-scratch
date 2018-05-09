@extends('layout')

@section('content')
<div>{{ $post->title}}</div>
<div>{{ $post->body }}</div>

<div>
    <h2>コメント</h2>
    <ul>
    @foreach ($post->comments as $comment)
        <li>
            {{ $comment->created_at->diffForHumans() }}. {{ $comment->body }}
        </li>
    @endforeach
    </ul>
</div>

<form method="post" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}
    <textarea name="body"></textarea>
    <input type="submit">
</form>

@include('layouts.errors')

@endsection
