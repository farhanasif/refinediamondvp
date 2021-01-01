@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if(session()->get('cart'))
        <div class="col-10 offset-1">
            <a href="{{ url('/') }}" class="btn btn-danger mb-5" style="border-radius:0px;color:#fff">
                <span><i class="fa fa-angle-left"></i></span>
                Continue Shopping
            </a>
            <br>
            @include('frontend.includes.message')
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>
        
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['product_price'] * $details['product_qty'] ?>
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $details['product_name'] }}</td>
                                        <td><img src="{{ $details['product_image'] }}" width="100" height="100" class="img-responsive"/></td>
                                        <td>{{ $details['product_price'] }}</td>
                                        <td>
                                            <input type="number" value="{{ $details['product_qty'] }}" class="form-control product_qty" />
                                        </td>
                                        <td class="text-center">${{ $details['product_price'] * $details['product_qty'] }}</td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
                                <td></td>
                            </tr>
                            </tfoot>
                      </table>
                      <a href="{{ url('/checkout') }}" class="btn btn-danger mb-5 float-right" style="border-radius:0px;color:#fff">
                        Proceed to Checkout
                        <span><i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-danger col-10 offset-1" role="alert">
			<p class="text-center">Your cart is empty. Please added product to cart!</p>
		</div>
        @endif
        <br>
    </div>
</div>
@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), product_qty: ele.parents("tr").find(".product_qty").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            console.log('ok');
            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection