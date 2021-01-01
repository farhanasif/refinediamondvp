@extends('master')

@section('content')
	<div class="container">
		<a href="{{ url('/') }}" class="btn btn-danger mb-5" style="border-radius:0px;color:#fff">
			<span><i class="fa fa-angle-left"></i></span>
			Continue Shopping
		</a>
		<div class="card">
			<div class="card-body">
		
				<div class="row">
					<div class="col-md-4">
						@if($view_products_details_product->photo)
						<img class="card-img-top feature-image" style="height: 200px" src="{{ asset('uploads/product/'.$view_products_details_product->photo) }}" alt="Product image">
						@else
						<img class="card-img-top feature-image" style="height: 200px" src="{{asset('assets/frontend/images/slider/2.jpeg')}}" alt="Image">

						@endif
					</div>
					<div class="ml-5">
						<h6> <b>Product Name:</b> {{$view_products_details_product->title}}</h6>
						<h6 style="font-weight: bold; text-align: justify; text-justify: inter-word;"> <b>Current Price:</b> {{$view_products_details_product->current_price}}</h6>
					<h6 style="font-weight: bold;text-align: justify; text-justify: inter-word;">Discount Price: {{$view_products_details_product->discount_price}}</h6> <br>
						<form action="{{ url('add-to-cart/'.$view_products_details_product->id) }}" method="post">
							@csrf
							<input type="hidden" value="{{$view_products_details_product->current_price}}" name="current_price">
							<button type="submit" class="btn btn-danger" style="border-radius:0px;color:#fff">Add to Cart</button>
						</form>
					</div>
				</div>
				<div>
					<br>
					<label> <b>Short Description:</b> </label><p style="text-align: justify; text-justify: inter-word;">{{$view_products_details_product->short_description}}</p> <br>
					<label> <b>Long Description:</b> </label><p style="text-align: justify; text-justify: inter-word;">{{$view_products_details_product->long_description}}</p> <br>
				</div>
			</div>
		</div>
		
	</div>
@endsection