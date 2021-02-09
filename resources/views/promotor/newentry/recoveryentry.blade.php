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
                    <!-- /.Personal Information -->
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
                                            <label>Full Name <b class="text-danger">*</b></label>
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
                                            <label>Contact/Mobile<b class="text-danger">*</b></label>
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
                    <!-- /.Placement Information -->
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
                                        <label>Sponsor Mobile<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="sponsor_mobile" value="{{$user->mobile}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Sponsor BC<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="sponsor_bc" value="{{$root->bc}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Placement Mobile<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="placement" value="" onchange="checkPlacementWithBC()">
                                        <div class="form-text" id="placement_help"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Placement BC<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="placement_bc" value="1" onchange="checkPlacementWithBC()">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Position<b class="text-danger">*</b></label>
                                    <select class="form-control" id="position">
                                        <option value="L">Team A</option>
                                        <option value="R">Team B</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Package<b class="text-danger">*</b></label>
                                    <select class="form-control" id="package">
                                        <option value="Package 1">Package 1</option>
                                        <option value="Package 2">Package 2</option>
                                        <option value="100">100 (Free User)</option>
                                        <option value="2000">2000 (Recovery Entry)</option>
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
                                        <label class="text-danger"># Use Recovery Auto Transfer Mobile <b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="auto_transfer_mobile" value="">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.Previous Information -->
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
                                            <label>Company Name<b class="text-danger">*</b></label>
                                            <input type="text" class="form-control" id="company">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Previous ID<b class="text-danger">*</b></label>
                                            <input type="text" class="form-control" id="previous_id">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Total Investment Amount</label>
                                            <input type="text" class="form-control" id="investment" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Total Receive Amount<b class="text-danger">*</b></label>
                                            <input type="text" class="form-control" id="receive" onchange="calculate()">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Total Loss Amount</label>
                                            <input type="text" class="form-control" id="loss" disabled>
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
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>RDL Money Receipt</label>
                                            <input type="text" class="form-control" id="rdl_money_receipt">
                                        </div>
                                    </div>

                                </div>
                                <br />
                                <div class="form-row align-items-center">
                                    <div class="col-md-4 mb-3">
                                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">MR NO</div>
                                            </div>
                                            <input type="text" class="form-control" id="mr_no" placeholder="MR NO">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">Amount</div>
                                            </div>
                                            <input type="text" class="form-control" id="mr_amount" placeholder="Amount">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <button type="submit" class="btn btn-primary mb-2" onclick="addMr()">Add</button>
                                    </div>
                                    <div class="row pl-3">
                                        <div id="mrview"><div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer" >
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
    //var money_receipt = [];
    var mramount = [];
    var a = 1;

    $(function () {
        console.log('here');
    });

    function addMr(){

        var mr = $('#mr_no').val();
        var mr_amount = $('#mr_amount').val();

        if(mr !== '' && mr_amount !== ''){
            var valid = 1;
            for (i = 0; i < money_receipt.length; i++) {
                if(money_receipt[i] == mr){
                    valid = 0;
                }
            }
            if(valid == 1){
                money_receipt.push(mr);
                money_receipt_amount.push(mr_amount);
                $('#mr_no').val('');
                $('#mr_amount').val('');
                var investment = 0;
                var text = '<ul class="list-group">';
                for (i = 0; i < money_receipt.length; i++) {
                    text += '<li class="list-group-item">Money Receipt : '+money_receipt[i] + ' |   Amount : '+money_receipt_amount[i] + '     <span class="badge badge-danger" onclick="removeMR('+i+')">Remove</span></li>';
                    investment += parseInt(money_receipt_amount[i]);
                }
                text += '</ul>';
                $('#mrview').html(text);
                $('#investment').val(investment);
            }
            else{
                alert('money receipt already used');
            }


        }

        console.log(money_receipt);
    }

    function removeMR(index){
        var r = confirm("Are you sure you want to remove Money Receipt : " +money_receipt[index]+"?");
        if (r == true) {
            money_receipt.splice(index,1);
            var investment = 0;
            var text = '<ul class="list-group">';
            for (i = 0; i < money_receipt.length; i++) {
                text += '<li class="list-group-item">Money Receipt : '+money_receipt[i] + ' |   Amount : '+money_receipt_amount[i] + '     <span class="badge badge-danger" onclick="removeMR('+i+')">Remove</span></li>';
                investment += parseInt(money_receipt_amount[i]);
            }
            text += '</ul>';
            $('#mrview').html(text);
            $('#investment').val(investment);
        } else {

        }

    }

    function calculate(){
        var i = $('#investment').val();
        if(i == '' || i < 1){}
        else{
            var r = $('#receive').val();
            if(r == '' || r < 1){}
            else{
                i = parseInt(i);
                r = parseInt(r);
                if(r > i){
                    alert('receive is greater than investment');
                }
                else{
                    var loss = i - r;
                    var inactive = i+loss;
                    $('#loss').val(loss);
                    $('#inactive').val(inactive);
                }
            }
        }
    }

    function savePromoter(){
        var auto_transfer_mobile = $('#auto_transfer_mobile').val();
        if(promoter_valid == false && auto_transfer_mobile == ''){alert('Placement information is invalid');}
        else{
            //placement information
            var sponsor_mobile = $('#sponsor_mobile').val();
            var sponsor_bc = $('#sponsor_bc').val();
            var placement = $('#placement').val();
            var placement_bc = $('#placement_bc').val();
            var position = $('#position').val();
            var package = $('#package').val();
            var product = $('#product').val();
            var trans_password = '1234';


            //personal information
            var full_name = $('#full_name').val();
            var fathers = $('#fathers').val();
            var mothers = $('#mothers').val();
            var address = $('#full_name').val();
            var email = $('#full_name').val();
            var mobile = $('#mobile').val();
            var emergency_contact = $('#emergency_contact').val();


            //previous information
            var company = $('#company').val();
            var previous_id  = $('#previous_id').val();
            var investment = $('#investment').val();
            var receive = $('#receive').val();
            var loss = $('#loss').val();
            var inactive = $('#inactive').val();
            var team_lead = $('#team_lead').val();
            var mr = money_receipt;
            var mr_amount = money_receipt_amount;
            var rdl_money_receipt = $('#rdl_money_receipt').val();

            if(full_name == ''
                || mobile == ''
                || company  == ''
                || team_lead == ''){

                if(auto_transfer_mobile == ''){
                    if(sponsor_mobile == ''
                    || placement == ''){
                        alert('fill up all the required field');
                        return;
                    }
                }



            }

            if(money_receipt.length < 1){
                alert('no money receipt added');
                return;
            }

            if(auto_transfer_mobile == ''){
                var r = confirm("Use Recovery Auto Transfer Mobile  is blank. Are you sure you want to create e new Entry  ?");
                if (r == true) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    // need to check money receipt

                    $.ajax({
                        type: 'POST',
                        url: './savenewpromoterforrecovery',
                        data: {
                            sponsor_mobile: sponsor_mobile,
                            sponsor_bc: sponsor_bc,
                            placement: placement,
                            placement_bc: placement_bc,
                            position: position,
                            package: package,
                            product: product,
                            trans_password: trans_password,

                            full_name: full_name,
                            mobile: mobile,
                            fathers: fathers,
                            mothers: mothers,
                            address: address,
                            email: email,
                            emergency_contact: emergency_contact,

                            company: company,
                            previous_id: previous_id,
                            investment: investment,
                            receive: receive,
                            loss: loss,
                            inactive: inactive,
                            team_lead: team_lead,
                            mr: mr,
                            mr_amount: mr_amount,
                            rdl_money_receipt: rdl_money_receipt
                        },
                        dataType: 'text',
                        success: function (data) {
                            console.log(data);
                            //alert(data);
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

                                //now we create recovery information and previous information

                                Swal.fire({
                                    title: 'Inserted Successfully!',
                                    text: res[1],
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                })
                            }
                        }
                    });
                } else {

                }

            }
            else{
                //update on auto recovery mobile
                var r = confirm("Are you sure you want to update on the auto recovery mobile?");
                if (r == true) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    // need to check money receipt

                    $.ajax({
                        type: 'POST',
                        url: './autosavenewpromoterforrecovery',
                        data: {
                            auto_transfer_mobile: auto_transfer_mobile,
                            trans_password: trans_password,

                            full_name: full_name,
                            mobile: mobile,
                            fathers: fathers,
                            mothers: mothers,
                            address: address,
                            email: email,
                            emergency_contact: emergency_contact,

                            company: company,
                            previous_id: previous_id,
                            investment: investment,
                            receive: receive,
                            loss: loss,
                            inactive: inactive,
                            team_lead: team_lead,
                            mr: mr,
                            mr_amount: mr_amount,
                            rdl_money_receipt: rdl_money_receipt
                        },
                        dataType: 'text',
                        success: function (data) {
                            console.log(data);
                            //alert(data);
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

                                //now we create recovery information and previous information
                                //update money receipt to blank

                                Swal.fire({
                                    title: 'Inserted Successfully!',
                                    text: res[1],
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                })
                            }
                        }
                    });
                } else {

                }

            }

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
