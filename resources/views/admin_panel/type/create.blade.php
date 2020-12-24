@extends('layouts.admin')
@section('title','Create Type')
@section('content')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="form-group text-center">
                <h1>Add type</h1>
            </div>
            <div class="col-md-6 offset-3">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('type.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Type:</label>
                        <input required type="text" name="name" id="name" class="form-control">
                    </div>
                    <input type="submit" value="Add" class="btn btn-dark float-right">
                </form>


            </div>
        </div>
    </div>

@endsection
