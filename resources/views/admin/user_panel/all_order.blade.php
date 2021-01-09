@extends('admin.admin_master')

@section('admin_title', 'User Order Histroy')
@section('dashobard_title', 'User Order Histroy')
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
              <li class="breadcrumb-item active"> User</li>
              <li class="breadcrumb-item active">User Order Histroy</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">User Order Histroy</h3>
        </div>
          @include('admin.includes.message')
        <!-- /.card-header -->
        <div class="card-body">
          <table id="allUser" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_orders as $all_order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $all_order->title }}</td>
                    <td>
                        <img class="card-img-top feature-image" style="height: 80px; width:80px;" src="{{ asset('uploads/product/'.$all_order->photo) }}" alt="Image">
                    </td>
                    <td>{{ $all_order->product_price }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection

@section('custom_js')
    <script>
  $(function () {
    $("#allUser").DataTable();
  });
</script>
@endsection