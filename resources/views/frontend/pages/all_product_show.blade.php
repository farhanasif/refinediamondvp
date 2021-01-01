@extends('master')

@section('front_home_titile','All Product View')
@section('content')

	<div class="col-md-3">
		<div class="list-group">
			<a style="text-align: center; background-color: saddlebrown !important" href="#" class="list-group-item list-group-item-action">
				<span class="text-white"><i class="fa fa-home"></i> ALL CATEGORIES</span>
			</a>
			@foreach($categories as $category)
				<a style="text-align: center;" href="{{ url('subcategory',$category->id) }}" class="list-group-item list-group-item-action text-uppercase">
					{{$category->category_name}}
				</a>
			@endforeach
		</div>
	</div>

	<div class="col-md-9">
			<div class="card">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" style="height: 300px" src="{{asset('assets/frontend/images/slider/1.jpeg')}}" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" style="height: 300px" src="{{asset('assets/frontend/images/slider/2.jpeg')}}" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" style="height: 300px"  src="{{asset('assets/frontend/images/slider/1.jpeg')}}" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<br>

			@include('frontend.includes.message')

			@if(count($all_products))
				<div class="alert alert-success" style="height: 60px">
					<h3 class="text-uppercase text-center mb-4">ALL PRODUCTS</h3>
				</div>

				<div class="row">
					@foreach($all_products as $product)
					<div class="col-md-3 mb-4">
						<div class="card">
							@if(empty($product->photo))
								<img class="card-img-top feature-image" style="height: 150px" src="{{asset('assets/frontend/images/slider/2.jpeg')}}" alt="Image">
							@else
								<img class="card-img-top feature-image" style="height: 150px" src="{{ asset('uploads/product/'.$product->photo) }}" alt="Image">
							@endif
							<div class="card-body">
								<h4 class="card-title text-center" style="font-size: 1.1rem;">{{ str_limit($product->title,17) }}</h4>
								<p class="card-text text-center">Tk <b class="text-black">{{$product->current_price}}</b></p>
								<div style="text-align: center">
									<a href="{{ route('viewDetailsProduct',$product->id) }}">
										<p class="btn btn-warning" class="text-center">See Details</p> 
									</a>
									<form action="{{ url('add-to-cart/'.$product->id) }}" method="post">
										@csrf
										<input type="hidden" value="{{$product->current_price}}" name="current_price">
										<button type="submit" class="btn btn-success">Add to Cart</button>
									</form>
								</div>
							</div>
						</div>
					</div>	
					@endforeach
				</div>
		<br>
		{{ $all_products->links()}}
		@else
			<div class="alert alert-danger" role="alert">
			<p class="text-center">No Product Found!</p>
		  	</div>
		@endif
	</div>
@endsection