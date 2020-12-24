@extends('layouts.admin')
@section('title','Details')
@section('content')
    <div class="container">
        <h2>Tag name: {{$tag->name}} </h2>
        <form action="{{route('tag.destroy',[$tag->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
    </div>
@endsection
