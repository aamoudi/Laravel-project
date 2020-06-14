@extends('admin.layouts.master')
@section('title' , 'Edit products')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                @include('layouts.messeges')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
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
                                <h3 class="card-title">Edit Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{route('admin.products.update',$product->id)}}"
                                  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" class="form-control" id="product_name" name="product_name"
                                               value="{{$product->name}}" placeholder="Enter Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Product Category</label>
                                        <select class="form-control" name="category_id">
                                            <option disabled selected>Select category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"
                                                    {{$category->id == $product->category_id ? 'selected' : ''}}
                                                >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_description">Product Description</label>
                                        <textarea class="form-control" id="product_description"
                                                  name="product_description"
                                                  placeholder="Product Description">{{$product->short_description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_details">Product Details</label>
                                        <textarea class="form-control" id="product_details"
                                                  name="product_details"
                                                  placeholder="Product Details">{{$product->details}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_price">Product Price</label>
                                        <input type="text" class="form-control" id="product_price" name="product_price"
                                               value="{{$product->price}}"
                                               placeholder="Product Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="product_discount">Product Discount</label>
                                        <input type="text" class="form-control" id="product_discount"
                                               name="product_discount"
                                               value="{{$product->discount}}"
                                               placeholder="Product Discount">
                                    </div>
                                    <div class="form-group">
                                        <label for="currency_code">Product Currency Code</label>
                                        <select class="form-control" name="currency_code">
                                            <option disabled selected>Select Currency</option>
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->code}}"
                                                    {{$currency->code == $product->currency_code ? 'selected' : ''}}
                                                >{{$currency->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="supplier_id">Product Supplier</label>
                                        <select class="form-control" name="supplier_id">
                                            <option disabled selected>Select Supplier</option>
                                            @foreach($suppliers as $supplier)
                                                <option value="{{$supplier->id}}"
                                                    {{$supplier->id == $product->supplier_id ? 'selected' : ''}}
                                                >{{$supplier->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_image">Product Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="product_image"
                                                   id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
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
