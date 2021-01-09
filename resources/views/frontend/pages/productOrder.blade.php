@extends('master')

@section('content')
	<div class="container">
    <a href="{{ url('/') }}" class="btn btn-danger mb-5" style="border-radius:0px;color:#fff">
      <span><i class="fa fa-angle-left"></i></span>
      Continue Shopping
    </a>
      <div class="row">
        <div class="col-12">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <form method="POST" action="{{ route('orderProduct') }}">
                  @csrf
                <table class="table">
                  <thead>
                  <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td><img alt="Image" style="width: 100px; height:100px" src="{{ asset('uploads/product/'.$product_orders->photo) }}"></td>
                        <td>{{ $product_orders->title }}</td>
                        <input type="text" hidden name="product_name" value="{{ $product_orders->title }}">
                        <td>৳ {{ $product_orders->current_price }}</td>
                        <input type="text" hidden name="product_price" value="{{ $product_orders->current_price }}">
                        <td>01</td>
                        <td>৳ {{ $product_orders->current_price }}</td>
                        <td>
                          <i title="Remove Item From Cart" class="fa fa-trash btn btn-danger"></i>
                        </td>
                      </tr>                                
                  </tbody>
                </table>
          </div>
          </div>
        </div>
      </div>
    <hr>
    @include('admin.includes.message')
    <h4 class="text-center text-blue">Please Fillup Your Basic Info</h4>
      <div class="card">
        <div class="card-body"> 
          <div class="container">
            <div class="row">
                <div class="form-group col-6">
                  <label for="">Your Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Your Name">
                </div>
                <div class="form-group col-6">
                  <label for="">Your Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Your Email">
                </div>
                <div class="form-group col-6">
                  <label for="">Your Mobile</label>
                  <input type="text" class="form-control" name="mobile" placeholder="Your Mobile">
                </div>
                <div class="form-group col-6">
                  <label for="">Your Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Your Address">
                </div>
                <div class="form-group col-6 offset-6 float-right">
                  <button type="submit" style="border-radius:0px;cursor:pointer;" name="submit" class="btn btn-danger float-right">Proceed to checkout <span> <i class="fa fa-angle-right"></i></span></button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </form>
      <br>
      <div class="col-md-6">
        <a href="{{ url('/') }}" class="btn btn-danger" style="border-radius:0px;color:#fff">
          <span><i class="fa fa-angle-left"></i></span>
          Continue Shopping
        </a>
    </div>
</div>
@endsection