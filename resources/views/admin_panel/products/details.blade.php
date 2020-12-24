@extends('layouts.admin')
@section('title','Details')
@section('content')
    <div>
        <h2>Product: {{$product->name}} </h2>

        <p>Image:</p>

            <img class="container" src="/images/{{$product->img}}" >


        <p>Content: {{$product->description}}</p>
        <p>Category: {{$product->category_id}}</p>
        <p>Brand: {{$product->brand_id}}</p>
        <form action="{{route('product.destroy',[$product->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
    </div>
@endsection
