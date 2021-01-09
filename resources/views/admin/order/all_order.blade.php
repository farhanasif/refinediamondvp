@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'All Order')
@section('dashobard_title', 'All Order')
@section('admin_content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Order</li>
              <li class="breadcrumb-item active">All Order Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Order Information</h3>
        </div>
          @include('admin.includes.message')
        <!-- /.card-header -->
        <div class="card-body">
          <table id="allCategory" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Phone</th>
                    <th>User Address</th>
                    <th>Product Name</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $order->user_name }}</td>
                  <td>{{ $order->user_email }}</td>
                  <td>{{ $order->user_mobile }}</td>
                  <td>{{ $order->user_address }}</td>
                  <td>{{ $order->product_name }}</td>
                  <td>{{ number_format($order->total_price,2) }}</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-info btn-xs"> <i class="fa fa-edit"></i> </a>
                    <a href="{{ route('deleteOrder',$order->id) }}" class="btn btn-sm btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
    $("#allCategory").DataTable();
  });
</script>
@endsection