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
            <h3 class="card-title">Demand Details</h3>
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
                        <!-- /.card-header -->
                        <div class="card-body">

                        @foreach ($results as $result)
                            <div class="col-md-12">
                                <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">{{$result->category}}</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    {{$result->description}}
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2 pt-3">
                                        <a href="#" type="button" class="btn btn-block btn-outline-primary btn-sm">Details</a>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        @endforeach

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">চাহিদা গ্রহণকারীর তালিকা</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                        <table class="table table-sm table-bordered table-striped dataTable dtr-inline" id="example1" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Amount</th>
                                    <th>Created At</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($receives as $receive)
                                    <tr>
                                        <td class="table-active"><b>#</b></td>
                                        <td><b>{{$receive->name}}</b></td>
                                        <td>{{$receive->mobile}}</td>
                                        <td>{{$receive->amount}} {{$receive->category == 'RDL প্রোপারটিজ' ? 'শতাংশ':'টি' }}</td>
                                        <td>{{$receive->created_at}}</td>
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
