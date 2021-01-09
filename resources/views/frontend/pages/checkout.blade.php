@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2">
            <a href="{{ url('/') }}" class="btn btn-danger mb-5" style="border-radius:0px;color:#fff">
                <span><i class="fa fa-angle-left"></i></span>
                Continue Shopping
            </a>
            <br>

            @include('frontend.includes.message')
            
            <h4 class="text-center text-blue">Please Fillup Your Basic Info</h4>
            <div class="card">
              <div class="card-body"> 
                <div class="container">
                    <h4>You already registred? Please login and confirm order. or registred then login after confirm order.</h4>
                  <div class="row">
                      <div class="form-group row" style="margin-left:300px">
                        <div class="form-check">
                            <a href="{{ route('login') }}" class="btn btn-danger mb-5 float-right" style="border-radius:0px;color:#fff">
                                Login
                            </a>
                        </div>
                        <div class="form-check ml-5">
                            <a href="{{ route('userRegistration') }}" class="btn btn-danger mb-5 float-right" style="border-radius:0px;color:#fff">
                                Registration
                            </a>
                        </div>
                      </div>
                    </div>
                    <br>
                    <form action="{{ url('/order-checkout') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label for="">Payent Type</label>
                                <select name="payment_type" id="" class="form-control" required>
                                    <option value="">--select payment type--</option>
                                    <option value="cash">Cash On Delivery</option>
                                    <option value="bikash">Bikash</option>
                                    <option value="rocket">Rocket</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-danger mb-5 float-right" style="border-radius:0px;color:#fff">
                            Place on Order
                            <span><i class="fa fa-angle-right"></i></span>
                        </button>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <br>
    </div>
</div>
@endsection
