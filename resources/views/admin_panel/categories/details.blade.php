@extends('layouts.admin')
@section('title','Details')
@section('content')
    <div class="container">
        <h2>Title: {{$category->name}} </h2>

        <p>Image:</p>

            <img src="/images/{{$category->img}}" >
        <form action="{{route('category.destroy',[$category->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
    </div>
@endsection
