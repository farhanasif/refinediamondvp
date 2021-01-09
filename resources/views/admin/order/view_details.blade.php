
@extends('admin.admin_master')

@section('admin_title', 'View order details')
@section('dashobard_title', 'View order details')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Order</li>
                        <li class="breadcrumb-item active">All order details</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
                <div class="card-header">Order No: 
                    <strong>#BBB-10010110101938</strong>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Print</a>
                    {{-- <a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="#" data-abc="true">
                        <i class="fa fa-save"></i> Save</a> --}}
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h6 class="mb-3"> <strong>From:</strong> </h6>
                            <div>
                                <strong>www.refinediamond.com</strong>
                            </div>
                            <div>House-356, Road-27,(1st Floor)</div>
                            <div>Mohakhali DOHS, Dhaka-1206.</div>
                            <div>E-Mail: aminrdlbd@gmail.com</div>
                            <div>Phone: 01847160600</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-right">
                                <h6 class="mb-3"> <strong>To:</strong> </h6>
                                <div>Name: {{ $users[0]->name }}</div>
                                <div>Email: {{ $users[0]->email }}</div>
                                <div>Mobile: {{ $users[0]->mobile }}</div>
                                <div>Address: {{ $users[0]->address }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Product Name</th>
                                    <th class="center">Quantity</th>
                                    <th class="right">Unit Cost</th>
                                    <th class="right">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($viewOrders as $order)
                                <tr>
                                    <td class="center">{{ $loop->iteration }}</td>
                                    <td class="left">{{ $order->title }}</td>
                                    <td class="center">{{ $order->qty }}</td>
                                    <td class="right">{{ number_format($order->current_price ,2) }} </td>
                                    <td class="right">{{ number_format($order->current_price * $order->qty,2) }}</td>
                                    @php
                                        $total += $order->current_price * $order->qty;
                                    @endphp
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5" style="display: none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Payment Type:</strong>
                                        </td>
                                        <td class="right">Cash on Delivery</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount (0%)</strong>
                                        </td>
                                        <td class="right">0</td>
                                    </tr>

                                    <tr>
                                        <td class="left">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">

                                            <strong>{{ number_format( $total,2) }}</strong>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection