
@extends('layouts.admin')
@section('title','Details')
@section('content')
    <div class="container">
        <h2>Type name: {{$type->name}} </h2>
        <form action="{{route('type.destroy',[$type->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
    </div>
@endsection
