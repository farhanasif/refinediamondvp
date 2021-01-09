@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Add Product Details')
@section('dashobard_title', 'Add Product Details')
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
              <li class="breadcrumb-item active"> Product Details</li>
              <li class="breadcrumb-item active">Add Product Details Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
           Add Product Details
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{ route('storeProductDetails') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="product_size">Product Size</label>
                      <input type="text" class="form-control" name="product_size" placeholder="Enter Product Size">
                      @if($errors->has('product_size'))
                        <p class="text-danger">{{ $errors->first('product_size') }}</p>
                      @endif
                    </div>

                    <div class="form-group">
                        <label for="product_color">Product Color</label>
                        <input type="text" class="form-control" name="product_color" placeholder="Enter Product Color">
                        @if($errors->has('product_color'))
                          <p class="text-danger">{{ $errors->first('product_color') }}</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('allProductDetails') }}" class="btn btn-info ">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection
