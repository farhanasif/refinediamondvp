@extends('admin.admin_master')

@section('dashobard_title', 'Down Line Center Open')
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
        <h3 class="card-title">Purchase Account Registration</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Sponsor Id</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="sponsorId" id="sponsorId" placeholder="01634189911">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your Name</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="name" id="name" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your Country</label>
               <div class="col-sm-10">
                   <select class="browser-default custom-select" name="country"> 
                    <option selected="">Open this select menu</option>
                    <option value="">Bangladesh</option>
                    <option value="">Pakistan</option>
                    <option value="">India</option>
                    <option value="">Newzilnd</option>
                    <option value="">Canada</option>
                    <option value="">Australia</option>
                    <option value="">Germany</option>
                    <option value="">France</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your Address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your Mobile Number(Login Id)</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your Re-Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your re-password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Your Re-Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your re-password">
              </div>
            </div>
            <div class="form-group">
              <h4>Condition</h4>
              <p>Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc</p>
            </div>
            <div class="col-sm-6">
              <!-- checkbox -->
              <div class="form-group clearfix">
                <div class="icheck-success d-inline">
                  <input type="checkbox" id="checkboxSuccess2">
                  <label for="checkboxSuccess2">
                  </label>
                </div>
                <div class="icheck-success d-inline">
                  <label for="checkboxSuccess3">
                    Are You Agree With Us
                  </label>
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
        <button type="submit" class="btn btn-info">Submit</button>
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