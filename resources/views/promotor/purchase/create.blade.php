@extends('admin.admin_master')

@section('dashobard_title', 'Request Purchase Amount')
@section('admin_content')


<!-- Main content -->
<section class="content mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Request Purchase Amount</h3>
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
                            <div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Promoter Mobile</label>
                                        <input type="text" class="form-control" id="mobile" value="{{Auth::user()->mobile}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" class="form-control" id="amount" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Payment Type</label>
                                    <select class="form-control" id="ptype">
                                        <option value="Cash">Cash</option>
                                        <option value="BKash">BKash</option>
                                        <option value="Nagad">Nagad</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Transaction ID (if MFS)</label>
                                    <input type="text" class="form-control" id="trxid" value="">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="btnSave" onclick="save()">Request Purchase Amount</button>
                            <a href="{{route('promotor.purhcaseamount')}}">Back</button>
                        </div>
                    </div>
                    <!-- /.card -->

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
      var Swal = require('sweetalert2');

      function save(){

          var mobile = $('#mobile').val();
          var amount = $('#amount').val();
          var ptype = $('#ptype').val();
          var trxid = $('#trxid').val();

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              type: 'POST',
              url: './savepurchaseamountrequest',
              data: {
                mobile: mobile,
                amount: amount,
                ptype: ptype,
                trxid: trxid,
              },
              dataType: 'text',
              success: function (data) {
                  // console.log(data);
                  // alert(data);
                  var res = data.split(",");
                  if(res[0] == 'error'){
                      Swal.fire({
                          title: 'Error!',
                          text: res[1],
                          icon: 'error',
                          confirmButtonText: 'OK'
                      })

                  }
                  else{
                      Swal.fire({
                          title: 'Request submitted Successfully!',
                          text: res[1],
                          icon: 'success',
                          confirmButtonText: 'OK'
                      })
                  }
              }
          });


    }
    </script>
@endsection
