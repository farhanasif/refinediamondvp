@extends('admin.admin_master')
@section('dashobard_title', 'Investment User details')
@section('admin_content')
<style>
    th.dt-center, td.dt-center { text-align: center !important; }
</style>
<!-- Main content -->
<section class="content mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Investment User Details</h3>
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
                            <h3 class="card-title">Investment Entries</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-sm table-bordered table-striped dataTable dtr-inline" id="example1" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Point</th>
                                    <th>NID</th>
                                    <th>Panel Holder Name</th>
                                    <th>Panel Holder Mobile</th>
                                    <th>Service</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                    <tr>
                                        <td class="table-active"><b>#</b></td>
                                        <td><b>{{$result->seller_name}}</b></td>
                                        <td>{{$result->total_amount}}</td>
                                        <td>{{$result->total_point}}</td>
                                        <td>{{$result->nid}}</td>
                                        <td>{{$result->name}}</td>
                                        <td>{{$result->panel_holder_mobile}}</td>
                                        <td>{{$result->service_name}}</td>
                                        <td>{{$result->created_at}}</td>
                                        <td>
                                        @if(Auth::user()->id == 52)
                                            @if($result->investor_name == '')
                                            Entry Not Done
                                            @else
                                            Entry Done
                                            @endif
                                        @else

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
            if(mobile !== '01925995556'){
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
            }

        } else {

        }
    }
</script>
@endsection
