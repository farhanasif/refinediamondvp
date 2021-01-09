
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
   
<div class="container-fluid" style="background: #f7912b; height:40px;">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<a href="#" style="margin-top: 8px;">
						<i class="fa fa-comment" style="font-size: 17px; color: white;" aria-hidden="true"></i>
						<span style=" color:  white;">24x7 Live Support</span>
					</a>
					<a href="#" style="margin-left: 20px; margin-top: 8px;">
						<i class="fa fa-phone" style="font-size: 17px;    color: white;" aria-hidden="true"></i>
						<span style=" color:  white;">018******** </span>
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row float-right">
					@guest
					<a href="{{route('login')}}" style="margin-top: 8px;">
						<i class="fa fa-key" style="font-size: 17px; color: white;" aria-hidden="true"></i>
						<span style=" color:  white;">Login</span>
					</a>
					<a href="{{route('userRegistration')}}" style="margin-left: 20px; margin-top: 8px;">
						<i class="fa fa-lock" style="font-size: 17px;    color: white;" aria-hidden="true"></i>
						<span style=" color:  white;">Registration</span>
					</a>
					@else
					<a href="{{route('dashboard')}}" style="margin-top: 8px;">
						<i class="fa fa-user" style="font-size: 17px; color: white;" aria-hidden="true"></i>
						<span style=" color:  white;">My Account</span>
					</a>
					<a style="margin-left: 20px; margin-top: 8px;" href="{{ route('logout') }}"
					onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
						<i class="fas fa-sign-out-alt" style="font-size: 17px;    color: white;" aria-hidden="true"></i>
						<span style=" color:  white;">Logout</span>
				 </a>
				  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					  @csrf
				  </form>
					@endguest
				</div>
			</div>
		</div>
	</div>
</div>

	<nav style="background-color: saddlebrown !important" class=" sticky-top navbar navbar-expand-lg navbar-light bg-light">
	    <div class="container-fluid">
		  <a style="color: #fff !important;" class="navbar-brand" href="{{route('front_home')}}">
		  	<img style="width: 80px; border-radius: 50%;" src="{{asset('assets/frontend/logo/logo1.png')}}">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a style="color: #fff !important;" class="nav-link" href="{{route('front_home')}}">HOME <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a style="color: #fff !important;" class="nav-link" href="{{url('/home/product/all-product')}}">ALL SHOP</a>
		      </li>
		      <li class="nav-item">
		        <a style="color: #fff !important;" class="nav-link" href="javascript:void(0)">ABOUT US</a>
		      </li>
		      <li class="nav-item">
		        <a style="color: #fff !important;" class="nav-link" href="javascript:void(0)">CONTACT US</a>
		      </li>
		       <li class="nav-item">
		        <a style="color: #fff !important;" class="nav-link" href="javascript:void(0)">MISSION & VISSION</a>
		      </li>
		      <li class="nav-item">
		        <a style="color: #fff !important;" class="nav-link" href="javascript:void(0)">FAQ</a>
			  </li>
			  @php
				  $total = App\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
					return $t->product_price * $t->qty;
				  });

				  $qty = App\Cart::where('user_ip',request()->ip())->sum('qty');

			  @endphp
			  {{-- <li class="nav-item">
				<a style="color: #fff !important;" class="nav-link" href="javascript:void(0)">My Cart ({{ $qty }})</a>
			  </li> --}}
			  <li class="nav-item dropdown">
				<a style="color: #fff !important;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  MY CART
				</a>
				<?php $totalAmount = 0 ?>
				@if(session('cart'))
					@foreach(session('cart') as $id => $details)
						<?php $totalAmount += $details['product_price'] * $details['product_qty'] ?>
					@endforeach
				@endif

				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="#">Quantity: @if(session('cart')) {{ count(session('cart')) }} @endif </a>
				  <a class="dropdown-item" href="#">Total Amount: {{ $totalAmount }}</a>
				  <a class="dropdown-item" href="{{ url('/cart-details') }}">View Cart</a>
				</div>
			  </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
			 <div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Search...." aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
				  <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
				</div>
			  </div>
			</form>
		  </div>
	  </div>
	</nav>
