@extends('admin.layouts.master')
@section('title' , 'Categories')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                @include('layouts.messeges')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categories</h1>
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
                                <a href="{{route('admin.categories.create')}}">
                                    <button type="button" class="btn btn-block btn-success">Add new Category</button>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Category Code</th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($categories as $category)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$category->name}}
                                            </td>
                                            <td>
                                                {{$category->code}}
                                            </td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-sm btn-primary float-left"
                                                   style="margin-right: 15px"
                                                   href="{{route('admin.categories.edit',$category->id)}}">Edit</a>
                                                <form method="Post"
                                                      action="{{route('admin.categories.destroy',$category->id)}}">
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
                                        <th>Category Name</th>
                                        <th>Category Code</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        {{$categories->links()}}
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
