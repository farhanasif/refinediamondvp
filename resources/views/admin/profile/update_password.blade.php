@extends('admin.admin_master')

@section('dashobard_title', 'Admin Password Change')
@section('admin_content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Password</li>
            <li class="breadcrumb-item active">Update Password</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Password Change</h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="old_password">Current Password</label>
                                    <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                    </form>
                </div>
            </div>
        </div>
@endsection
