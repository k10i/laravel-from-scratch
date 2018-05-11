@extends('layout')

@section('content')
<ul>
    @foreach ($posts as $post)
        <li>{{ $post->created_at }} by {{ $post->user->name }} <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
    @endforeach
</ul>
@endsection
