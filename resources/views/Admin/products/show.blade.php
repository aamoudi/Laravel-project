@extends('admin.layouts.master')
@section('title' , 'Products')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                @include('layouts.messeges')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('admin.products.create')}}">
                                    <button type="button" class="btn btn-block btn-success">Add new</button>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Prouduct Name</th>
                                        <th>Product Photo</th>
                                        <th style="width: 28%">Description</th>
                                        <th>Product Price</th>
                                        <th>Sales</th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            <a>
                                                {{$product->name}}
                                            </a>
                                        </td>
                                        <td>
                                            <img width="100" src="{{asset('img/product/'. $product->cover_image .'')}}">
                                        </td>
                                        <td>
                                            {{$product->short_description}}
                                        </td>
                                        <td>
                                            {{$product->price}}
                                            <span style="color: #0f6674"
                                                  class="product-currency">{{$product->currency_code}}</span>
                                            <p> Discount <s class="product-discount"> {{$product->discount}}%</s></p>
                                        </td>
                                        <td>
                                            {{$product->sales()}}
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn btn-sm btn-primary float-left" style="margin-right: 15px"
                                               href="{{route('admin.products.edit',$product->id)}}">Edit</a>
                                            <form method="Post"
                                                  action="{{route('admin.products.destroy',$product->id)}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger float-left">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Prouduct Name</th>
                                        <th>Product Photo</th>
                                        <th>Description</th>
                                        <th>Product Price</th>
                                        <th>Sales</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        {{$products->links()}}
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
