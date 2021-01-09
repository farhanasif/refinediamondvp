@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Edit User')
@section('dashobard_title', 'Edit User')
@section('admin_content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> User</li>
              <li class="breadcrumb-item active">Edit User Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown"> 
            Edit User
        </div>
        @include('admin.includes.message')
        <div class="card-body">
                <div class=" col-md-12">
                  <form method="post" action="{{ route('updateUser',$user->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="category_name">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="category_name">Email</label>
                          <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="category_name">Photo</label>
                          <input type="file" class="form-control" name="photo" value="{{ $user->photo }}">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="category_name">User type</label>
                           <select class="form-control" name="role_type">
                                <option>--Select User Type--</option>
                            <option {{$user->role_type == 'admin' ? 'selected' :''}} value="admin">Admin</option>
                            <option {{$user->role_type == 'promoter' ? 'selected' :''}} value="promoter">Promoter</option>
                            <option {{$user->role_type == 'user' ? 'selected' :''}} value="user">User</option>
                           </select>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="category_name">Bio</label>
                            <textarea class="form-control" name="bio" id="" cols="3" rows="3" placeholder="Bio">{{ $user->bio }}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('allUser') }}" class="btn btn-info ">Back</a>
                </form>
                </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection