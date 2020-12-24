@extends('layouts.admin')
@section('title','Details')
@section('content')
    <div class="container">

        <h2>Title: {{$post->title}} </h2>

        <p>Image:</p>

                <img src="/images/{{$post->img}}" >


        <p>Content: {{$post->text}}</p>
        <p>Tag: {{$post->tag_id}}</p>
        <p>Type: {{$post->type_id}}</p>
        <form action="{{route('blog.destroy',[$post->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
    </div>
@endsection
