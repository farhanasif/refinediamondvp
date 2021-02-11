@extends('admin.admin_master')

@section('dashobard_title', 'Investment Demand Entry')
@section('admin_content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Add Demand Request</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <!-- /.card-header -->
      <div class="card-body">
        <div>
            <div class="row">
                <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Demand Type</label>
                    <select class="form-control" id="demand_type">
                        <option value="RDL প্রোপারটিজ">RDL প্রোপারটিজ</option>
                        <option value="RDL কুরিয়ার">RDL কুরিয়ার</option>
                        <option value="RDL রেন্ট এ কার">RDL রেন্ট এ কার</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                <!-- text input -->
                    <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." id="details"></textarea>
                    </div>
                </div>
            </div>
        </div>
      <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" id="btnSave" onclick="savePromoter()">Submit Demand Request</button>
        <a href="{{route('promotor.investment')}}">Back</button>
    </div>
  </div><!-- /.container-fluid -->
</section>


@endsection

@section('custom_js')
   <script>
      var Swal = require('sweetalert2');

      function savePromoter(){

          var demand_type = $('#demand_type').val();
          var details = $('#details').val();


          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              type: 'POST',
              url: './savedemand',
              data: {
                demand_type: demand_type,
                details: details
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
                          title: 'Demand Created Successfully!',
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
