@extends('layout')

@section('content')
<ul>
    @foreach ($posts as $post)
        <li>
            {{ $post->created_at }} by {{ $post->user->name }} <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            @if (count($post->tags))
                <ul>
                    @foreach ($post->tags as $tag)
                        <li><a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>

@endsection
