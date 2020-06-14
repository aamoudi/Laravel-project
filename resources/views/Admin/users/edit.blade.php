@extends('admin.layouts.master')
@section('title' , 'Edit Users')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                @include('layouts.messeges')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add user</h1>
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
                                <h3 class="card-title">Add user</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{route('admin.users.update',$user->id)}}">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{$user->name}}" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{$user->email}}" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Roles</label>
                                        <select multiple class="form-control" name="roles_id[]">
                                            <option value="0">No roles</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Password Confirmation</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                               name="password_confirmation"
                                               placeholder="Password">
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
