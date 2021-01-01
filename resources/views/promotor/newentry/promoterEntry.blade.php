@extends('admin.admin_master')

@section('dashobard_title', 'Promoter New Entry')
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
            <h3 class="card-title">New Entry</h3>
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
                                        <label>Sponsor Mobile</label>
                                        <input type="text" class="form-control" id="sponsor_mobile" value="{{$user->mobile}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Sponsor BC</label>
                                        <input type="text" class="form-control" id="sponsor_bc" value="{{$root->bc}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Placement Mobile</label>
                                        <input type="text" class="form-control" id="placement" value="" onchange="checkPlacement()">
                                        <div class="form-text" id="placement_help"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Placement BC</label>
                                        <input type="text" class="form-control" id="placement_bc" value="1" onchange="checkPlacementWithBC()">
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
                                        <option value="100">100 (Free User)</option>
                                        <option value="2000">2000 (Hope Digital City)</option>
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
                            <!-- <div class="row">
                                <div class="col-sm-6">
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
                            </div> -->
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
    var promoter_valid = false;
    var sponsor_valid = true;

    $(function () {
        console.log('here');
    });

    function savePromoter(){
        if(promoter_valid == false){alert('Placement information is invalid');}
        else{
            var sponsor_mobile = $('#sponsor_mobile').val();
            var sponsor_bc = $('#sponsor_bc').val();
            var placement = $('#placement').val();
            var placement_bc = $('#placement_bc').val();
            var position = $('#position').val();
            var package = $('#package').val();
            var product = $('#product').val();
            var full_name = $('#full_name').val();
            var mobile = $('#mobile').val();
            var trans_password = $('#trans_password').val();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: './savenewpromoter',
                data: {
                    sponsor_mobile: sponsor_mobile,
                    sponsor_bc: sponsor_bc,
                    placement: placement,
                    placement_bc: placement_bc,
                    position: position,
                    package: package,
                    product: product,
                    full_name: full_name,
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

    }

    function checkPlacement(){
        var placement = $('#placement').val();
        console.log(placement);
        //check placement is valid or not
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: './checkplacement',
            data: {
                placement: placement
            },
            dataType: 'text',
            success: function (data) {
                if(data == 'true'){
                    promoter_valid = true;
                    $('#placement').removeClass( "is-invalid" );
                    $('#placement').addClass( "is-valid" );
                    $('#placement_help').text('placement mobile no is valid!');
                    $('#placement_help').removeClass( "text-danger" );
                    $('#placement_help').addClass( "text-success" );
                }
                else{
                    promoter_valid = false;
                    $('#placement').removeClass( "is-valid" );
                    $('#placement').addClass( "is-invalid" );
                    alert('Placement mobile is invalid');
                    $('#placement_help').text('placement mobile no is not valid!');
                    $('#placement_help').removeClass( "text-danger" );
                    $('#placement_help').addClass( "text-danger" );
                }
            }
        });
    }

    function checkPlacementWithBC(){
        var placement = $('#placement').val();
        var bc = $('#placement_bc').val();
        console.log(placement);
        //check placement is valid or not
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: './checkplacementwithbc',
            data: {
                placement: placement,
                bc: bc
            },
            dataType: 'text',
            success: function (data) {
                if(data == 'true'){
                    promoter_valid = true;
                    $('#placement').removeClass( "is-invalid" );
                    $('#placement').addClass( "is-valid" );
                    $('#placement_bc').removeClass( "is-invalid" );
                    $('#placement_bc').addClass( "is-valid" );
                    $('#placement_help').text('placement mobile no & BC is valid!');
                    $('#placement_help').removeClass( "text-danger" );
                    $('#placement_help').addClass( "text-success" );
                }
                else{
                    console.log('here');
                    promoter_valid = false;
                    $('#placement').removeClass( "is-valid" );
                    $('#placement').addClass( "is-invalid" );
                    $('#placement_bc').removeClass( "is-valid" );
                    $('#placement_bc').addClass( "is-invalid" );
                    alert('Placement mobile no & BC is invalid');
                    $('#placement_help').text('placement mobile no & BC is not valid!');
                    $('#placement_help').removeClass( "text-danger" );
                    $('#placement_help').addClass( "text-danger" );
                }
            }
        });
    }
</script>
@endsection
