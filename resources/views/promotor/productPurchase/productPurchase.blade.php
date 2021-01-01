@extends('admin.admin_master')

@section('dashobard_title', 'Product Purchase')
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
          <div class="card-header">
            <h3 class="card-title">Product Purchase</h3>

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
                  <label for="inputPassword3" class="col-sm-6 col-form-label">Purchase Amount</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Purchase Amount" readonly>
                  </div>
                </div>
                <div class="form-group row">
                 <label for="inputPassword3" class="col-sm-6 col-form-label">Select Product</label>
                 <div class="col-sm-10">
                   <select class="browser-default custom-select" name="title"> 
                    <option selected>Open this select menu</option>
                    @foreach($productPurchase as $pPurchase)
                    <option value="{{$pPurchase->id}}">{{$pPurchase->title}}</option>
                    
                    @endforeach
                   </select>
                 </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-6 col-form-label">Transanction Pin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pin" id="pin" placeholder="Pin Number">
                  </div>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
          </div>
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