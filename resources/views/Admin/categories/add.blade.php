@extends('admin.layouts.master')
@section('title' , 'Add Categories')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                @include('layouts.messeges')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Categories</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{route('admin.categories.store')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="category_name">Category Name</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name"
                                               value="{{old('category_name')}}" placeholder="Enter Category Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_code">Category Code</label>
                                        <input type="text" class="form-control" id="category_code" name="category_code"
                                               value="{{old('category_code')}}"
                                               placeholder="Enter Category Code">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
