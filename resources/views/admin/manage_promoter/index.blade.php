@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'All Promoter')
@section('dashobard_title', 'All Promoter')
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
              <li class="breadcrumb-item active"> Promoter</li>
              <li class="breadcrumb-item active">All Promoter Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Promoter Information</h3>
           <a href="{{ route('managePromoter.create') }}" class="float-right btn btn-success btn-sm mb-3"> <i class="fa fa-plus-circle"></i> Add New</a>
        </div>
          @include('admin.includes.message')
        <!-- /.card-header -->
        <div class="card-body">
          <table id="allPromoter" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Promoter ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Password</th>
                    <th>Transaction Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promoters as $promoter)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $promoter->promoter_id }}</td>
                    <td>{{ $promoter->name }}</td>
                    <td>{{ $promoter->email }}</td>
                    <td>{{ $promoter->address }}</td>
                    <td>{{ $promoter->country }}</td>
                    <td>{{ $promoter->password }}</td>
                    <td>{{ $promoter->transaction_password }}</td>
                    <td style="width: 80px;" class="text-center">
                        <a href="{{ route('managePromoter.edit',$promoter->id) }}" class="btn btn-sm btn-info btn-xs"> <i class="fa fa-edit"></i> </a>
                        <a href="{{ route('managePromoter.delete',$promoter->id) }}" class="btn btn-sm btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
    $("#allPromoter").DataTable();
  });
</script>
@endsection