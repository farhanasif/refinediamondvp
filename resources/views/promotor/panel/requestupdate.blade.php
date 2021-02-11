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
                            <h3 class="card-title">Demand Reponse Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Response Amount (শতাংশ / টি)
                                        </label>
                                        <input type="text" class="form-control" id="amount" value="">
                                    </div>
                                </div>
                                @foreach ($results as $result)
                                <input type="hidden" class="form-control" id="rdid" value="{{$result->id}}">
                                @endforeach
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="btnSave" onclick="savePromoter()">Save</button>
                            <a href="{{route('promotor.investment')}}">Back</button>
                        </div>
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
      var Swal = require('sweetalert2');

      function savePromoter(){

          var amount = $('#amount').val();
          var rdid = $('#rdid').val();

          if(amount !== null || amount !== undefined || amount < 1){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '../savedemandresponse',
                data: {
                    amount: amount,
                    rdid: rdid
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



    }
    </script>
@endsection
