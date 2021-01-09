@extends('admin.admin_master')

@section('dashobard_title', 'Promoter Entry')
@section('admin_content')
@if(Session::has('success') || Session::has('failed') || Session::has('error'))
<section class="content">
    <div class="col-md-8 offset-2 mt-2">
        @if(Session::has('success'))
        <div class="alert alert-success alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-center">{{ Session::get('success') }}</strong>
        </div>
        @endif

        @if(Session::has('failed'))
        <div class="alert alert-danger alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {{ Session::get('failed') }}</strong>
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
        @endif
    </div>
</section>
@endif

<!-- Main content -->
<section class="content mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Promoter Entry</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Sponsor And Placement</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Sponsor ID</label>
                                    <input type="text" class="form-control" id="sponsor_id" value="{{$sponsor_id}}">
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Placement</label>
                                    <input type="text" class="form-control" id="placement" value="{{$id}}">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Position</label>
                                    <select class="form-control" id="position">
                                        <option value="L">Team A</option>
                                        <option value="R">Team B</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Package</label>
                                    <select class="form-control" id="package">
                                        <option value="FREE">White</option>
                                        <option value="GOLD">Gold</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Product</label>
                                    <select class="form-control" id="product">
                                        <option value="-1">Select...</option>
                                        <option value="P1">Product A</option>
                                        <option value="P2">Product B</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Promotar Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" id="full_name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile No</label>
                                        <input type="text" class="form-control" id="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Re Type Password</label>
                                        <input type="password" class="form-control" id="re_password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Transaction Password</label>
                                        <input type="password" class="form-control" id="trans_password">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="btnSave" onclick="savePromoter()">Submit Promotar</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>  
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


</section>


@endsection

@section('custom_js')
<script>
    $(function () {
        console.log('here');
    });

    function savePromoter(){
        sponsor_id = $('#sponsor_id').val();
        placement = $('#placement').val();
        position = $('#position').val();
        package = $('#package').val();
        product = $('#product').val();
        full_name = $('#full_name').val();
        mobile = $('#mobile').val();
        password = $('#password').val();
        re_password = $('#re_password').val();
        trans_password = $('#trans_password').val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'GET',
            url: '../savepromoter',
            data: {
                sponsor_id: sponsor_id,
                placement: placement,
                position: position,
                package: package,
                product: product,
                full_name: full_name,
                mobile: mobile,
                password: password,
                trans_password: trans_password
            },
            dataType: 'text',
            success: function (data) {
                console.log(data);
                alert(data);
            }
        });
    }
</script>
@endsection
