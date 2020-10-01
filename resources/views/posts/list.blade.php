@extends('layot.layot')

@section('title')
    <title>List</title>
@endsection

@section('content')
    @foreach($posts as $post)
        <div>
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <p>{{$post->author}}</p>
        </div>
    @endforeach
@endsection
