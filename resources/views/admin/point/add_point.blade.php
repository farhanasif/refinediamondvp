@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Add Point')
@section('dashobard_title', 'Add Point')
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
              <li class="breadcrumb-item active"> Point</li>
              <li class="breadcrumb-item active">Add Point Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown">
           Add Point
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{ route('storePoint') }}">
                    @csrf
                    <div class="form-group">
                      <label for="category_name">Category Name</label>
                      <select name="category_name" class="form-control" id="">
                          <option value="">--select Category name--</option>
                          @foreach ($categories as $category)
                          <option value="{{ $category->id}}">{{ $category->category_name }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="photo">Subcategory Name</label>
                      <select name="subcategory_name" class="form-control" id="">
                        <option value="">--select Subcategory name--</option>
                        @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id}}">{{ $subcategory->subcategory_name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">Product Type</label>
                        <select name="product_type" class="form-control" id="">
                          <option value="">--select Product Type--</option>
                          @foreach ($product_types as $type)
                          <option value="{{ $type->id}}">{{ $type->product_type }}</option>
                          @endforeach
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="Product Price">Product Price</label>
                        <input type="number" name="product_price" class="form-control" placeholder="Product Price">
                      </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ url('/point/all-point') }}" class="btn btn-info ">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection