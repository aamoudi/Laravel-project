@extends('admin.layouts.master')
@section('title' , 'Users')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                @include('layouts.messeges')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
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
                                <a href="{{route('admin.users.create')}}">
                                    <button type="button" class="btn btn-block btn-success">Add new</button>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            <a>
                                                {{$user->name}}
                                            </a>
                                        </td>
                                        <td>
                                            {{$user->email}}
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach($user->roles as $role)
                                                    <li>{{$role->name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="project-actions text-center">
                                            @can('update',Auth::user())
                                                <a class="btn btn-sm btn-primary float-left" style="margin-right: 15px"
                                                   href="{{route('admin.users.edit',$user->id)}}">Edit</a>
                                            @endcan

                                            @can('delete',Auth::user())
                                                <form method="Post"
                                                      action="{{route('admin.users.destroy',$user->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger float-left">
                                                        Delete
                                                    </button>
                                                </form>
                                            @endcan
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        {{$users->links()}}
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
