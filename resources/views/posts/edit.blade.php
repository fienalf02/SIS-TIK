@extends('layouts.app')

@section('title')
   Halaman edit {{ $post->title }}
@endsection

@section('content')
    <h2>Edit {{$post->title}}</h2>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('post.update', $post->id ) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        Title : <br>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>
        Body : <br>
        <textarea name="body" id="" cols="30" rows="10"> {{ $post->body }}</textarea>
        <br><br>
        <input type="submit" value="Update">
    </form>
@endsection