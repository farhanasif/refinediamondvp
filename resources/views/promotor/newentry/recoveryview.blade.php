@extends('admin.admin_master')
@section('dashobard_title', 'Recovery')
@section('admin_content')
<style>
    th.dt-center, td.dt-center { text-align: center !important; }
</style>
<!-- Main content -->
<section class="content mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recovery View</h3>
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
                            <h3 class="card-title">Recovery Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-sm table-bordered table-striped dataTable dtr-inline" id="example1" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>Recovery Id</th>
                                    <th>Name</th>
                                    <th>Fathers</th>
                                    <th>Mothers</th>
                                    <th>Team Lead</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Emergency</th>
                                    <th>Company</th>
                                    <th>Previous ID</th>
                                    <th>Investment</th>
                                    <th>Receive</th>
                                    <th>Loss</th>
                                    <th>Inactive</th>
                                    <th>Auto Recovery ID</th>
                                    <th>Placement Mobile</th>
                                    <th>BC</th>
                                    <th>Money Receipt</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                    <tr>
                                        <td class="table-active"><b>{{$result->id}}</b></td>
                                        <td><b>{{$result->full_name}}</b></td>
                                        <td>{{$result->fathers}}</td>
                                        <td>{{$result->mothers}}</td>
                                        <td>{{$result->team_lead_id}}</td>
                                        <td>{{$result->address}}</td>
                                        <td>{{$result->mobile}}</td>
                                        <td>{{$result->emergency_contact}}</td>
                                        <td>{{$result->company}}</td>
                                        <td>{{$result->previous_id}}</td>
                                        <td>{{$result->investment}}</td>
                                        <td>{{$result->receive}}</td>
                                        <td>{{$result->loss}}</td>
                                        <td>{{$result->inactive}}</td>
                                        <td>{{$result->auto_recovery_id}}</td>
                                        <td>{{$result->bc_mobile}}</td>
                                        <td>1</td>
                                        <td>{{$result->money_receipt}}</td>
                                        <td>{{$result->amount}}</td>
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
