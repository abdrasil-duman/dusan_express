@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin Panel</h1>
                        <div class="container">
                            @foreach($brands as $brand)
                                <div class="alert alert-dark">
                                    <a href="{{route('brand.edit', $brand->id)}}" style="font-size: 20pt;">{{$brand->name}}</a>
                                </div>
                            @endforeach
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    <!-- /.content -->
@endsection
