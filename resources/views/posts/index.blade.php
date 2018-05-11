@extends('layout')

@section('content')
<ul>
    @foreach ($posts as $post)
        <li>{{ $post->created_at }} by {{ $post->user->name }} <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
    @endforeach
</ul>

<ul>
    @foreach ($archives as $stats)
        <li><a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'] }} {{ $stats['year'] }}</a></li>
    @endforeach
</ul>
@endsection
