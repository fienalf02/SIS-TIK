@extends('layouts.app')

@section('title')
    Halaman Post
@endsection

@section('content')
    <h1>Data Post</h1>
    @if(count($posts)>0)
        <ul>
            @foreach($posts as $post)
            <li><a href="{{ route('post.show', $post->id) }}">{{$post -> title}} </a></li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada Data</p>
    @endif
@endsection