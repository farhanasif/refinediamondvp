@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Edit Marketing Stuff')
@section('dashobard_title', 'Edit Marketing Stuff')
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
              <li class="breadcrumb-item active"> Marketing Stuff</li>
              <li class="breadcrumb-item active">Edit Marketing Stuff Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown">
            Edit Marketing Stuff
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{ route('updateMarketingStuff',$marketing_stuff->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $marketing_stuff->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ $marketing_stuff->email }}">
                      </div>
                      <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" value="{{ $marketing_stuff->mobile }}">
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder=" Enter Address">{{ $marketing_stuff->address }}</textarea>
                      </div>

                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('allMarketingStuff') }}" class="btn btn-info ">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection