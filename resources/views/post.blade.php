@extends('template')

@section('content')
<h1>{{ $post->title }}</h1>
    <p>
        {{ $post }}
    </p>
@endsection

    
