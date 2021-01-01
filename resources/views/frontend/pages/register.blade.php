@extends('master')
@section('stylesheet')
    
@endsection
@section('content')
	<div class="container">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-body">
					@include('frontend.includes.message')
					<button class="btn btn-primary" onclick="myFunction()">Skip Sponsor Id</button>
					<form action="{{route('user.register')}}" method="post">
							@csrf
						<!-- <input class="btn btn-primary" type="button"  value="Skip Sponr Id" id="hide" /> -->
					<div id="dvPassport" class="form-row">
					    <label for="sponsor_id">Sponsor ID</label>
					    <input type="text" id="txtPassportNumber" class="form-control" name="sponsor_id" value="{{old('sponsor_id')}}" placeholder="Enter Sponsor ID">
					    @if($errors->has('sponsor_id'))
			              <span class="text-danger">{{ $errors->first('sponsor_id') }}</span>
			            @endif
				     </div>

				     <!-- <div id="dvPassport" class="form-group">
		                  <label for="sponsor_id">Sponsor ID</label>
		                  <div class="input-group">
		                    <div class="input-group-prepend">
		                      <span class="input-group-text" id="spon" data-cchh="0"><img style="width: 20px;" src="{{asset('assets/frontend/logo/download.png')}}"></span>
		                    </div>
		                    <input type="text" id="sponss" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" im-insert="true">
		                  </div>
	                 </div> -->

					  <div class="form-row">
					    <label for="name">Your Name</label>
					    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Your Name">
					    @if($errors->has('name'))
			              <span class="text-danger">{{ $errors->first('name') }}</span>
			            @endif
					  </div>
					  <div class="form-row" hidden="">
					    <label for="name">Role Type</label>
					    <input type="text" class="form-control" name="role" value="{{old('role')}}" placeholder="Enter Your Name">
					  </div>

					  <div class="form-row">
					    <label for="country">Your Country</label>
					    <select class="form-control" name="country">
					    	<option>--select country--</option>
					    	<option value="Bangladesh">Bangladesh</option>
					    	<option value="India">India</option>
					    	<option value="Pakistan">Pakistan</option>
					    </select>
					    @if($errors->has('country'))
			              <span class="text-danger">{{ $errors->first('country') }}</span>
			            @endif
					  </div>
					  <div class="form-row">
					    <label for="address">Your Address</label>
					    <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter Your Address">
					    @if($errors->has('address'))
			              <span class="text-danger">{{ $errors->first('address') }}</span>
			            @endif
					  </div>

					  <div class="form-row">
					    <label for="Number">Your Mobile Number</label>
					    <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}" placeholder="Enter Your Mobile Number">
					    @if($errors->has('mobile'))
			              <span class="text-danger">{{ $errors->first('mobile') }}</span>
			            @endif
					  </div>

					  <div class="form-row">
					    <label for="exampleInputEmail1">Your Email</label>
					    <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Your Email">
					    @if($errors->has('email'))
			              <span class="text-danger">{{ $errors->first('email') }}</span>
			            @endif
					  </div>
					  <div class="form-row">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
					    @if($errors->has('password'))
			              <span class="text-danger">{{ $errors->first('password') }}</span>
			            @endif
					  </div>

					  <div class="form-row">
					    <label for="exampleInputPassword1">Your Re-Password</label>
					    <input type="password" class="form-control" placeholder=" Enter Your Re-Password">
					  </div><br>
					  <div class="form-row">
					    <h4>Condition</h4>
					    <p>Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc</p>
					  </div>
					   <div class="form-check">
						  <input class="form-check-input" name="terms_condition" type="checkbox" value="yes" id="defaultCheck1">
						  <label class="form-check-label" for="defaultCheck1">
						    Are You Agree With Us
						  </label>
						</div><br>

					 <!--  <button type="button" class="btn btn-info">Next</button> -->
			          <button type="submit" class="btn btn-success">Submit</button>
					  Already have an account?<a href="{{route('login')}}">Please Login</a>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
// $(document).ready(function(){
//   $("#hide").click(function(){
//     $("#dvPassport").hide();
//   });
 
// });

function myFunction() {
  var x = document.getElementById("dvPassport");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


// $("#sponss").on("keyup", function(){
// 	$("#spon").html("<img src='load.gif' />");
// });
// $("#sponss").on("focusout", function(){	
// });



</script>
@endsection