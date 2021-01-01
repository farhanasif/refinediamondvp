@extends('admin.admin_master')

@section('dashobard_title', 'Self Center Open')
@section('admin_content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <marquee style="color: red;">Welcome To RefineDimond 2020 Limited.</marquee>
      </div>
      <!-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Password Change</li>
        </ol>
      </div> -->
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
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
      <form action="#" method="post">
        @csrf
      <div class="card-header">
        <h3 class="card-title">New Center Registration</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Placement Id</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="placeId" id="placeId" placeholder="Enter Placement Id">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Placement Bc</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="placeBc" id="placeBc" placeholder="Placement Bc">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Placement</label>
               <div class="col-sm-10">
                  <!-- radio -->
                  <div class="form-group clearfix">
                    <div class="icheck-success d-inline">
                      <input type="radio" name="r3" checked="" id="radioSuccess1">
                      <label for="radioSuccess1">1st
                      </label>
                    </div>&nbsp;
                    <div class="icheck-success d-inline">
                      <input type="radio" name="r3" id="radioSuccess2">
                      <label for="radioSuccess2">2nd
                      </label>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Check Placement</button>
        <button type="submit" class="btn btn-default float-right">Cancel</button>
      </div>
    </form>
    </div>
  </div><!-- /.container-fluid -->
</section>

   
@endsection

@section('custom_js')
   <script>
        // function readURL(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $('#image_preview').attr('src', e.target.result);
        //         }
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
        // $("#image").change(function() {
        //     readURL(this);
        // });
    </script>
@endsection