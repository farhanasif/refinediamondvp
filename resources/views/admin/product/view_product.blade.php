@extends('admin.admin_master')

@section('custom_css')
    
@endsection

@section('admin_title', 'View Details Product')
@section('dashobard_title', 'View Details Product')

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
              <li class="breadcrumb-item active"> Product</li>
              <li class="breadcrumb-item active">View Product Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown">
            View Details Product
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="category_name">Category Name</label>
                            <input type="text" readonly class="form-control" value="{{  $view_products->category_name }}">
                          </div>
    
                          <div class="form-group col-6">
                            <label for="category_name">Subcategory Name</label>
                            <input type="text" readonly class="form-control" value="{{  $view_products->subcategory_name }}">
                          </div>
    
    
                        <div class="form-group col-6">
                          <label for="category_name">Sku</label>
                          <input type="text" readonly class="form-control" name="sku" placeholder="Enter Sku" value="{{  $view_products->sku }}">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="category_name">Title</label>
                            <input type="text" readonly class="form-control" name="title" placeholder="Enter title" value="{{  $view_products->title }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Short Description</label>
                            <textarea class="form-control" readonly name="short_description" id="" cols="3" rows="10" > {{$view_products->short_description }}</textarea>
                          </div>
    
                          <div class="form-group col-6">
                            <label for="category_name">Long Description</label>
                            <textarea class="form-control" readonly name="long_description" id="" cols="3" rows="10"> {{  $view_products->long_description }} </textarea>
                          </div>

                          <div class="form-group col-6">
                            <label for="category_name">Specification</label>
                            <textarea class="form-control" readonly name="specification" id="" cols="3" rows="10">{{  $view_products->specification }}</textarea>
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Delivery Description</label>
                            <textarea class="form-control" readonly name="delivery_description" id="" cols="3" rows="10">{{  $view_products->delivery_description }}</textarea>
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Current Stock</label>
                            <input type="number" class="form-control" readonly name="current_stock"value="{{  $view_products->current_stock }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Current Price</label>
                            <input type="number" class="form-control" readonly name="current_price"value="{{  $view_products->current_price }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Discount Price</label>
                            <input type="number" class="form-control" readonly name="discount_price"value="{{  $view_products->discount_price }}">
                          </div>

                          <div class="form-group col-6">
                            <label for="type">Product Type</label>
                            <input type="text" class="form-control" readonly value="{{  $view_products->type }}">
                          </div>

                          <div class="form-group col-6">
                            <label for="category_name">Image</label>
                            <img src="" alt="" style="width: 100px; height:100px">
                          </div>
                    </div>
                    <a href="{{ route('allProduct') }}" class="btn btn-info ">Back</a>

            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection