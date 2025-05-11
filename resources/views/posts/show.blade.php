@extends('template')

@section('content')
    <div class="post-container">
        <h1>{{ $post->title }}</h1>
        <div class="post-content">
            {!! nl2br(e($post->content)) !!}
        </div>
    </div>
@endsection