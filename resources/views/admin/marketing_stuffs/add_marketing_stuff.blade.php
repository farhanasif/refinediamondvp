@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Add Marketing Stuff')
@section('dashobard_title', 'Add Marketing Stuff')
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
              <li class="breadcrumb-item active">Add Marketing Stuff Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown">
           Add Marketing Stuff
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{ route('storeMarketingStuff') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile">
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder=" Enter Address"></textarea>
                      </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('allMarketingStuff') }}" class="btn btn-info ">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection