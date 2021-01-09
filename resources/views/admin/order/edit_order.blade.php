@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Edit Order')
@section('dashobard_title', 'Edit Order')
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
              <li class="breadcrumb-item active"> Order</li>
              <li class="breadcrumb-item active">Edit Order Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown">
            Edit Order
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="#">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">Customer Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $order->name }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Customer Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $order->email }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="mobile">Customer Phone</label>
                            <input type="number" class="form-control" name="mobile" value="{{ $order->mobile }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="category_name">Customer Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $order->address }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="{{ $order->product_name }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="product_price">Product Price</label>
                            <input type="text" class="form-control" name="product_price" value="{{ $order->product_price }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('allOrder') }}" class="btn btn-info ">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection