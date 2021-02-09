@extends('admin.admin_master')

@section('dashobard_title', 'Investment Panel Entry')
@section('admin_content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Investment Panel entry</h1>
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
                        <label>Panel User Mobile</label>
                        <input type="text" class="form-control" id="sponsor_mobile" value="">
                    </div>
                </div>
                <div class="col-sm-6">
                <!-- text input -->
                    <div class="form-group">
                        <label>Panel User BC</label>
                        <input type="text" class="form-control" id="sponsor_bc" value="1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Panel Type</label>
                    <select class="form-control" id="placement">
                        <option value="Prince">Prince Panel</option>
                        <option value="Royal">Royal Panel</option>
                        <option value="Gold">Gold Panel</option>
                    </select>
                </div>
                </div>
            </div>
        </div>
      <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" id="btnSave" onclick="savePromoter()">Create a new Panel user</button>
        <a href="{{route('promotor.investment')}}">Back</button>
    </div>
  </div><!-- /.container-fluid -->
</section>


@endsection

@section('custom_js')
   <script>
      var Swal = require('sweetalert2');

      function savePromoter(){

          var sponsor_mobile = $('#sponsor_mobile').val();
          var sponsor_bc = $('#sponsor_bc').val();
          var placement = $('#placement').val();


          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              type: 'POST',
              url: './savenewpanel',
              data: {
                  sponsor_mobile: sponsor_mobile,
                  sponsor_bc: sponsor_bc,
                  placement: placement,
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
                          title: 'Panel User Inserted Successfully!',
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
