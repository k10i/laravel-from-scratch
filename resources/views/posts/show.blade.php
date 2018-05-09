@extends('layout')

@section('content')
<div>{{ $post->title}}</div>
<div>{{ $post->body }}</div>
@endsection
