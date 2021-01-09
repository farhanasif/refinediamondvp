@extends('admin.admin_master')

@section('dashobard_title', 'Promoter Profile')
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
          <li class="breadcrumb-item active">User Profile</li>
        </ol>
      </div> -->
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
             
              <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
              <div class="card card-secondary">
              <div class="card-header text-info">
                <h3 class="card-title">Custom Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
         
                  <div class="form-group">
                    <label for="customFile">Choose Image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="customFile">Promotor Image Preview</label>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <img id="image_preview" src="{{asset('promotor/shahinur.jpg')}}" style="width: 180px;height: 180px">
                      </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
                <!-- /.col -->
          <div class="col-6">
            <div class="card card-secondary">
                <div class="card-header text-info">
                  <h3 class="card-title">Sponsor And Package Information</h3>
                </div>

              <div class="table-responsive">
                <table class="table">
                  <tbody><tr>
                    <th style="width:50%">Username:</th>
                    <td>Arif Hossain</td>
                  </tr>
                  <tr>
                    <th>Sponsor Name:</th>
                    <td>Nai</td>
                  </tr>
                  <tr>
                    <th>Mobile Number:</th>
                    <td>01634189911</td>
                  </tr>
                  <tr>
                    <th>Email:</th>
                    <td>arif@gmail.com</td>
                  </tr>
                  <tr>
                    <th>Package:</th>
                    <td>(00000000)</td>
                  </tr>
                </tbody></table>
              </div>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
       
    <div class="col-12">
       <!-- Main content -->
      <div class="invoice p-3 mb-3">
        <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Contact Information</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-6 col-form-label">Mobile</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="01634189911">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                          </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputPassword3" class="col-sm-6 col-form-label">Select</label>
                           <div class="col-sm-10">
                             <select class="browser-default custom-select">
                              <option selected>Open this select menu</option>
                              <option value="1">Bangladesh</option>
                              <option value="2">India</option>
                              <option value="3">Newzeland</option>
                              <option value="3">Pakistan</option>
                              <option value="3">Australia</option>
                              <option value="3">Germany</option>
                              <option value="3">Netherland</option>
                              <option value="3">France</option>
                              <option value="3">Uk</option>
                             </select>
                           </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">Country</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="country" id="country" placeholder="Country">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">State</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="state" id="state" placeholder="State">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">City</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="city" id="city" placeholder="State">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">Zip Code</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="State">
                          </div>
                        </div>
                        <!-- <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2">
                              <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                          </div>
                        </div> -->
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
                  <!-- /.col -->
              <div class="col-6">
                <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Bank Information</h3>
                    </div>
                    
                    <div class="card-body">
                    <form class="form-horizontal">
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-6 col-form-label">Name of Bank</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="bank" id="bank" placeholder="Sonali Bank">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">Account Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="account" id="account" placeholder="Account">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">Branch</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="branch" id="branch" placeholder="Babubazr Branch">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-6 col-form-label">Bank Account No</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="baccount" id="baccount" placeholder="55448535676">
                          </div>
                        </div>
                        <!-- <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2">
                              <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                          </div>
                        </div> -->
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                    </form>
                  </div>
                 
                </div>
              <!-- /.col --> 
            </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
   
@endsection

@section('custom_js')
   <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            readURL(this);
        });
    </script>
@endsection