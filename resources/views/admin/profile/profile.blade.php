@extends('admin.admin_master')

@section('dashobard_title', 'Admin Profile')
@section('admin_content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> Profile</li>
          <li class="breadcrumb-item active">Profile Information</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

 <div class="card">
  <div class="card-header" style="background-color: white">
    Profile Update
 </div>
   <div class="card-body">
      <div class="col-12">
          <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name" placeholder="Enter name">
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email" id="email" placeholder="Enter email">
                </div>
              </div>
    
              <div class="col-6">
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->mobile }}" name="mobile" id="mobile" placeholder="016********">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="inputPassword3">Country</label>
                    <select class="form-control" name="country">
                      <option selected>--select Country--</option>
                      <option {{ Auth::user()->country ? 'selected' : '' }} value="Bangladesh">Bangladesh</option>
                      <option {{ Auth::user()->country ? 'selected' : '' }} value="India">India</option>
                      <option {{ Auth::user()->country ? 'selected' : '' }} value="Pakistan">Pakistan</option>
                    </select>
                </div>
              </div>
    
              <div class="col-12">
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control" name="address" id="" cols="3" rows="3"  placeholder="Address">{{ Auth::user()->address}}</textarea>
                </div> 
              </div>

              <div class="form-group col-md-6">
                <label for="customFile">Choose Image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="photo">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group col-md-6">
                  <label for="customFile">Admin profile image preview</label>
                  </label>
                  <div class="col-md-3">
                      <img id="image_preview" src="{{asset('uploads/profile/')}}" style="width: 180px;height: 180px">
                  </div>
              </div>
              <div class="form-group">
               <button class="btn btn-success" type="submit">Update</button>
              </div> 
            </div>
          </form>
      </div>
 </div>
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
