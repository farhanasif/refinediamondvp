@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'All User')
@section('dashobard_title', 'All User')
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
              <li class="breadcrumb-item active">All User Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All User Information</h3>
        </div>
          @include('admin.includes.message')
        <!-- /.card-header -->
        <div class="card-body">
          <table id="allUser" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td style="width: 80px;" class="text-center">
                        <a href="{{route('editUser',$user->id)}}" class="btn btn-sm btn-info btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="{{route('deleteUser',$user->id)}}" class="btn btn-sm btn-danger btn-xs"><i class="fa fa-trash-alt"></i></a>
                    </td>
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