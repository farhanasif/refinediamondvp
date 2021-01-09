@extends('admin.admin_master')

@section('admin_title', 'Edit Product Terms')

@section('dashobard_title', 'Edit Product Terms')

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
              <li class="breadcrumb-item active"> Product Terms</li>
              <li class="breadcrumb-item active">Edit Product Terms Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
            Edit Product Terms
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{ route('updateProductTerms',$productTerm->id) }}">
                    @csrf
                    <div class="form-group">
                      <label for="name">Product terms name</label>
                      <input type="text" class="form-control" name="product_term" placeholder="Enter Product terms name" value="{{ $productTerm->product_term }}">
                    </div>

                    @if($errors->has('product_term'))
                      <p class="text-danger">{{ $errors->first('product_term') }}</p>
                    @endif
                    
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('allProductTerms') }}" class="btn btn-info ">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection
