@extends('admin.admin_master')
@section('dashobard_title', 'Panel User details')
@section('admin_content')
<style>
    th.dt-center, td.dt-center { text-align: center !important; }
</style>
<!-- Main content -->
<section class="content mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Panel User Details</h3>
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
                            <h3 class="card-title">Panel Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-sm table-bordered table-striped dataTable dtr-inline" id="example1" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Panel Type</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                    <tr>
                                        <td class="table-active"><b>#</b></td>
                                        <td><b>{{$result->name}}</b></td>
                                        <td>{{$result->mobile}}</td>
                                        <td>{{$result->status}}</td>
                                        <td>{{$result->created_at}}</td>
                                        <td>
                                            <button class="btn btn-warning btn-xs" onclick="remove('{{$result->mobile}}')">Remove</button>
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
    //var Swal = require('sweetalert2');

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

    function remove(mobile){
        var r = confirm("Are you sure?");
        if (r == true) {

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              type: 'POST',
              url: './removepanel',
              data: {
                  mobile: mobile
              },
              dataType: 'text',
              success: function (data) {
                location.reload();
              }
          });
        } else {

        }
    }
</script>
@endsection
