@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Edit Product')
@section('dashobard_title', 'Edit Product')
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
              <li class="breadcrumb-item active">Edit Product Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown">
            Edit Product
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-12">
                <form method="post" action="{{ route('updateProduct',$products->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="category_name">Category Name</label>
                            <select name="category_name"  class="form-control" id="">
                                <option value="">--select category name--</option>
                                @foreach ($categories as $category)
                                    <option {{ $products->category_id ==  $category->id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                          </div>
    
                          <div class="form-group col-6">
                            <label for="category_name">Subcategory Name</label>
                            <select name="subcategory_name"  class="form-control" id="">
                                <option value="">--select subcategory name--</option>
                                @foreach ($subcategories as $subcategory)
                                    <option {{ $products->subcategory_id ==  $subcategory->id ? 'selected' : ''}} value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </select>
                          </div>
    
                        <div class="form-group col-6">
                          <label for="category_name">Sku</label>
                          <input type="text" class="form-control" name="sku" placeholder="Enter Sku" value="{{ $products->sku }}">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="category_name">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{ $products->title }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Short Description</label>
                            <textarea class="form-control" name="short_description" id="" cols="3" rows="3" placeholder="Enter Short Description"> {{ $products->short_description }}</textarea>
                          </div>
    
                          <div class="form-group col-6">
                            <label for="category_name">Long Description</label>
                            <textarea class="form-control" name="long_description" id="" cols="3" rows="3" placeholder="Enter Long Description">{{ $products->long_description }}</textarea>
                          </div>

                          <div class="form-group col-6">
                            <label for="category_name">Specification</label>
                            <textarea class="form-control" name="specification" id="" cols="3" rows="3" placeholder="Enter Specification">{{ $products->specification }}</textarea>
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Delivery Description</label>
                            <textarea class="form-control" name="delivery_description" id="" cols="3" rows="3" placeholder="Enter Delivery Description">{{ $products->delivery_description }}</textarea>
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Current Stock</label>
                            <input type="number" class="form-control" name="current_stock" placeholder="Enter Current Stock" value="{{ $products->current_stock }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Current Price</label>
                            <input type="number" class="form-control" name="current_price" placeholder="Enter Current Price" value="{{ $products->current_price }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Discount Price</label>
                            <input type="number" class="form-control" name="discount_price" placeholder="Enter Discount Price" value="{{ $products->discount_price }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="category_name">Upload Image</label>
                            <input type="file" class="form-control" name="photo">
                          </div>

                          <div class="form-group col-12">
                            <label for="category_name">Product Type</label>
                            <select name="type" id="" class="form-control">
                              <option value="">--select product type-- </option>
                              @foreach ($product_types as $type)
                                  <option  {{ $type->id == $products->product_type_id ? 'selected' : '' }} value="{{ $type->id }}"> {{ $type->product_type }} </option>
                              @endforeach
                            </select>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('allProduct') }}" class="btn btn-info ">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection