@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'All Subcategory')
@section('dashobard_title', 'All Subcategory')
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
              <li class="breadcrumb-item active"> Subcategory</li>
              <li class="breadcrumb-item active">All Subcategory Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Subcategory Information</h3>
           <a href="{{ route('createSubCategory') }}" class="float-right btn btn-success btn-sm mb-3"> <i class="fa fa-plus-circle"></i> Add New</a>
        </div>
          @include('admin.includes.message')
        <!-- /.card-header -->
        <div class="card-body">
          <table id="allSubcategory" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>SL</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
                <th>Image</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $subcategory)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $subcategory->category_name }}</td>
                    <td>{{ $subcategory->subcategory_name }}</td>
                    <td> 
                        <img class="card-img-top feature-image" style="height: 60px; width: 60px;" src="{{ asset('uploads/subcategory/'.$subcategory->photo) }}" alt="Subcategory image">
                    </td>
                    <td style="width: 100px;" class="text-center">
                        <a href="{{ route('editSubCategory',$subcategory->id) }}" class="btn btn-sm btn-info btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('deleteSubCategory',$subcategory->id) }}" class="btn btn-sm btn-danger btn-xs"><i class="fa fa-trash-alt"></i></a>
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
    $("#allSubcategory").DataTable();
  });
</script>
@endsection