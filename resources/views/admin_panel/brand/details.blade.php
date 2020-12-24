@extends('layouts.admin')
@section('title','Details')
@section('content')
    <div class="container">
        <h2>Title: {{$brand->name}} </h2>
        <form action="{{route('brand.destroy',[$brand->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
    </div>

@endsection
