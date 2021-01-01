@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'All Product')
@section('dashobard_title', 'All Product')
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
              <li class="breadcrumb-item active">All Product Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Product Information</h3>
           <a href="{{ route('createProduct') }}" class="float-right btn btn-success btn-sm mb-3"> <i class="fa fa-plus-circle"></i> Add New</a>
        </div>
          @include('admin.includes.message')
        <!-- /.card-header -->
        <div class="card-body">
          <table id="allProduct" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>SL</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
                <th>Title</th>
                <th>Current Stock</th>
                <th>Current Price</th>
                <th>Type</th>
                <th>Image</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->category_name }}</td>
                    <td>{{ $product->subcategory_name }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->current_stock }}</td>
                    <td>{{ $product->current_price }}</td>
                    <td>{{ $product->product_type }}</td>
                    <td>
                      <img style="width: 60px;  height:60px" src="{{ asset('uploads/product/'.$product->photo) }}" alt="">
                    </td>
                    <td style="width: 100px;" class="text-center">
                        <a href="{{ route('editProduct',$product->id) }}" class="btn btn-sm btn-info btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('view_product',$product->id) }}" class="btn btn-sm btn-success btn-xs"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('deleteProduct',$product->id) }}" class="btn btn-sm btn-danger btn-xs"><i class="fa fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('custom_js')
    <script>
  $(function () {
    $("#allProduct").DataTable();
  });
</script>
@endsection