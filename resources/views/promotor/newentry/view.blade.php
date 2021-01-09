@extends('admin.admin_master')
@section('dashobard_title', 'Promoter Sponsor Tree View')
@section('admin_content')
@if(Session::has('success') || Session::has('failed') || Session::has('error'))
<section class="content">
    <div class="col-md-8 offset-2 mt-2">
        @if(Session::has('success'))
        <div class="alert alert-success alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-center">{{ Session::get('success') }}</strong>
        </div>
        @endif

        @if(Session::has('failed'))
        <div class="alert alert-danger alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {{ Session::get('failed') }}</strong>
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
        @endif
    </div>
</section>
@endif
<style>
    th.dt-center, td.dt-center { text-align: center !important; }
</style>
<!-- Main content -->
<section class="content mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Promoter Sponsor Tree View</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Placement Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-sm table-bordered table-striped dataTable dtr-inline" id="example1" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>Placement Id</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>BC</th>
                                    <th>Parent</th>
                                    <th>Left</th>
                                    <th>Right</th>
                                    <th>Sponsor</th>
                                    <th>Package</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                    <tr>
                                        <td class="table-active"><b>{{$result->placement_id}}</b></td>
                                        <td><b>{{$result->name}}</b></td>
                                        <td>{{$result->mobile}}</td>
                                        <td>{{$result->bc}}</td>
                                        <td>{{$result->parent_placement_id}}</td>
                                        <td class="table-primary">{{$result->left_placement_id}}</td>
                                        <td class="table-warning">{{$result->right_placement_id}}</td>
                                        <td>{{$result->sponsor_placement_id}}</td>
                                        <td>
                                            @if($result->package=='100')
                                                <button class="btn btn-success btn-xs">Free User</button>
                                            @elseif($result->package =='2000')
                                                <button class="btn btn-warning btn-xs">Hope Digital City</button>
                                            @else
                                                <button class="btn btn-info btn-xs">{{$result->package}}</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


</section>


@endsection

@section('custom_js')
<script>
$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "pageLength": 25,
      "columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
@endsection
