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
            <h3 class="card-title">New Recovery Entry Registration</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">

                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Presonal Information</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="full_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Fathers Name</label>
                                            <input type="text" class="form-control" id="fathers">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mothers Name</label>
                                            <input type="text" class="form-control" id="mothers">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" id="address">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Contact/Mobile</label>
                                            <input type="text" class="form-control" id="mobile">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Emergency Contact</label>
                                            <input type="text" class="form-control" id="emergency_contact">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Sponsor And Placement</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
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
                                        <input type="text" class="form-control" id="placement" value="" onchange="checkPlacementWithBC()">
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
                                        <option value="Package 1">Package 1</option>
                                        <option value="Package 2">Package 2</option>
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-danger"># Use Recovery Auto Transfer Mobile</label>
                                        <input type="text" class="form-control" id="auto_transfer_mobile" value="">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card card-outline card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Previous Company Information</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" id="company">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Previous ID</label>
                                            <input type="text" class="form-control" id="previous_id">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Total Investment Amount</label>
                                            <input type="text" class="form-control" id="investment">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Total Receive Amount</label>
                                            <input type="text" class="form-control" id="receive">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Total Loss Amount</label>
                                            <input type="text" class="form-control" id="loss">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Total Inactive Amount</label>
                                            <input type="text" class="form-control" id="inactive">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Recovery Team Leader(Mobile)</label>
                                            <input type="text" class="form-control" id="team_lead">
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
    var Swal = require('sweetalert2');

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
                    mobile: mobile,
                    trans_password: trans_password
                },
                dataType: 'text',
                success: function (data) {
                    // console.log(data);
                    // alert(data);
                    var res = data.split(",");
                    if(res[0] == 'error'){
                        Swal.fire({
                            title: 'Error!',
                            text: res[1],
                            icon: 'error',
                            confirmButtonText: 'OK'
                        })

                    }
                    else{
                        Swal.fire({
                            title: 'Promoter Inserted Successfully!',
                            text: res[1],
                            icon: 'success',
                            confirmButtonText: 'OK'
                        })
                    }
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
