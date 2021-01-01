@extends('admin.admin_master')

@section('admin_title', 'All Product Details')
@section('dashobard_title', 'All Product Details')
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
              <li class="breadcrumb-item active">All Product Details Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Product Details Information</h3>
           <a href="{{ route('createProductDetails') }}" class="float-right btn btn-success btn-sm mb-3"> <i class="fa fa-plus-circle"></i> Add New</a>
        </div>
          @include('admin.includes.message')
        <!-- /.card-header -->
        <div class="card-body">
          <table id="allProduct" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>SL</th>
                <th>Product Size</th>
                <th>Product Color</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product_details as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->product_size }}</td>
                    <td>{{ $product->product_color }}</td>
                    <td style="width: 100px;" class="text-center">
                        <a href="{{ route('editProductDetails',$product->id) }}" class="btn btn-sm btn-info btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('deleteProductDetails',$product->id) }}" class="btn btn-sm btn-danger btn-xs"><i class="fa fa-trash-alt"></i></a>
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