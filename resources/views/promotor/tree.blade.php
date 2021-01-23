@extends('admin.admin_master')

@section('dashobard_title', 'Promoter Sponsor Tree')
@section('admin_content')

<link href="{{asset('css/treeflex.css')}}" rel="stylesheet">
<style>
  /* make the nodes round and change their background-color */

  .tf-custom .tf-nc {
    background-color: gold;
    border-color: gold;
    border-radius: 5%;
    align-items: center;
    justify-content: center;
  }

  .tf-custom .tf-nc-recovery {
    background-color:  #c3caf1 ;
    border-color:  #c3caf1 ;
    border-radius: 5%;
    align-items: center;
    justify-content: center;
  }

  /* make the horizontal and vertical connectors thick and change their color */

  .tf-custom .tf-nc:before,
  .tf-custom .tf-nc:after {
    border-left-color:  #282827 ;
    border-left-width: 2px;
  }

  .tf-custom li li:before {
    border-top-color:  #282827 ;
    border-top-width: 2px;
  }

    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 200px;
        background-color: transparent;
        color: #000;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        alignItems: 'center';
        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    table, th, td {
        border: 1px solid #A2A1A2;
        padding-left: 2px;
        background-color: #dae5e5;
    }

    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 200px;
        background-color: transparent;
        color: #000;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        alignItems: 'center';
        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    table, th, td {
        border: 1px solid #A2A1A2;
        padding-left: 2px;
        background-color: #dae5e5;
    }
</style>


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <marquee style="color: red;">Welcome To RefineDimond 2020 Limited.</marquee>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Genology Tree</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <input type="text" class="form-control mb-2" id="usermobile" placeholder="enter mobile">
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control mb-2" id="userbc" placeholder="BC">
                        </div>
                        <div class="col-auto">
                            <button type="submit" id="btnViewPromotor" class="btn btn-primary mb-2" onclick="viewPromotor()">View</button>
                        </div>
                    </div>
                    <div class="tf-tree tf-custom">
                        <ul>
                            <li>
                                <span class="tf-nc elevation-3 text-center"
                                style="{{ $node_1_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                  @if($node_1_user_id > 0)
                                    <a href="{{ url('/promotor/tree/'.$node_1_user_id.'/'.$node_1_bc) }}">
                                        <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                                    </a>
                                    <br/>
                                    <b class="text-blue">{{ $node_1_name }}</b><br />
                                    <b>{{ $node_1_mobile }}</b>
                                    <br/>
                                    @if($node_1_user_id == 4)
                                        <a href="#">BC {{ $node_1_bc }}</a>
                                    @else
                                        <a href="#" onclick="getTooltip({{$node_1_user_id}},{{$node_1_bc}})">BC {{ $node_1_bc }}</a>
                                    @endif

                                  @else
                                      +
                                  @endif
                                </span>
                                <ul>
                                    <li>
                                        <span class="tf-nc elevation-3 text-center" style="{{ $node_11_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                          @if($node_11_user_id > 0)
                                          <a href="{{ url('/promotor/tree/'.$node_11_user_id.'/'.$node_11_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                            <b class="text-blue">{{ $node_11_name }}</b><br />
                                          <b>{{ $node_11_mobile }}</b><br/>
                                          <a href="#" onclick="getTooltip({{$node_11_user_id}},{{$node_11_bc}})">BC {{ $node_11_bc }}</a>
                                          @else
                                              +
                                          @endif
                                        </span>
                                        <ul>
                                            <li>
                                              <span class="tf-nc  elevation-3 text-center" style="{{ $node_111_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}" >
                                                @if($node_111_user_id > 0)
                                                <a href="{{ url('/promotor/tree/'.$node_111_user_id.'/'.$node_111_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                                <b class="text-blue">{{ $node_111_name }}</b><br />
                                                <b>{{ $node_111_mobile }}</b><br/>
                                                <a href="#" onclick="getTooltip({{$node_111_user_id}},{{$node_111_bc}})">BC {{ $node_111_bc }}</a>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1111_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1111_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1111_user_id.'/'.$node_1111_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_1111_name }}</b><br />
                                                        <b>{{ $node_1111_mobile }}</b><br/>
                                                        <a href="#" onclick="getTooltip({{$node_1111_user_id}},{{$node_1111_bc}})">BC {{ $node_1111_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1112_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1112_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1112_user_id.'/'.$node_1112_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_1112_name }}</b><br />
                                                      <b>{{ $node_1112_mobile }}</b><br/>
                                                      <a href="#" onclick="getTooltip({{$node_1112_user_id}},{{$node_1112_bc}})">BC {{ $node_1112_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="tf-nc elevation-3 text-center" style="{{ $node_112_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                  @if($node_112_user_id > 0)
                                                  <a href="{{ url('/promotor/tree/'.$node_112_user_id.'/'.$node_112_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_112_name }}</b><br />
                                                  <b>{{ $node_112_mobile }}</b><br/>
                                                  <a href="#" onclick="getTooltip({{$node_112_user_id}},{{$node_112_bc}})">BC {{ $node_112_bc }}</a>
                                                  @else
                                                      +
                                                  @endif
                                                </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1121_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1121_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1121_user_id.'/'.$node_1121_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                                                        style="opacity: .8"></a><br/>
                                                        <b class="text-blue">{{ $node_1121_name }}</b><br />
                                                        <b>{{ $node_1121_mobile }}</b><br/>
                                                        <a href="#" onclick="getTooltip({{$node_1121_user_id}},{{$node_1121_bc}})">BC {{ $node_1121_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1122_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1122_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1122_user_id.'/'.$node_1122_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_1122_name }}</b><br />
                    <b>{{ $node_1122_mobile }}</b><br/>
                    <a href="#" onclick="getTooltip({{$node_1122_user_id}},{{$node_1122_bc}})">BC {{ $node_1122_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="tf-nc elevation-3 text-center" style="{{ $node_12_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                          @if($node_12_user_id > 0)
                                          <a href="{{ url('/promotor/tree/'.$node_12_user_id.'/'.$node_12_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_12_name }}</b><br />
                    <b>{{ $node_12_mobile }}</b><br/>
                    <a href="#" onclick="getTooltip({{$node_12_user_id}},{{$node_12_bc}})">BC {{ $node_12_bc }}</a>
                                          @else
                                              +
                                          @endif
                                        </span>
                                        <ul>
                                            <li><span class="tf-nc elevation-3 text-center" style="{{ $node_121_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                              @if($node_121_user_id > 0)
                                              <a href="{{ url('/promotor/tree/'.$node_121_user_id.'/'.$node_121_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_121_name }}</b><br />
                                              <b>{{ $node_121_mobile }}</b><br/>
                                              <a href="#" onclick="getTooltip({{$node_121_user_id}},{{$node_121_bc}})">BC {{ $node_121_bc }}</a>
                                              @else
                                                  +
                                              @endif
                                            </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1211_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1211_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1211_user_id.'/'.$node_1211_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_1211_name }}</b><br />
                    <b>{{ $node_1211_mobile }}</b><br/>
                    <a href="#" onclick="getTooltip({{$node_1211_user_id}},{{$node_1211_bc}})">BC {{ $node_1211_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1212_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1212_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1212_user_id.'/'.$node_1212_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_1212_name }}</b><br />
                    <b>{{ $node_1212_mobile }}</b><br/>
                    <a href="#" onclick="getTooltip({{$node_1212_user_id}},{{$node_1212_bc}})">BC {{ $node_1212_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                            <li><span class="tf-nc elevation-3 text-center" style="{{ $node_122_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                @if($node_122_user_id > 0)
                                                <a href="{{ url('/promotor/tree/'.$node_122_user_id.'/'.$node_122_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_122_name }}</b><br />
                    <b>{{ $node_122_mobile }}</b><br/>
                    <a href="#" onclick="getTooltip({{$node_122_user_id}},{{$node_122_bc}})">BC {{ $node_122_bc }}</a>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1221_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1221_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1221_user_id.'/'.$node_1221_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_1221_name }}</b><br />
                    <b>{{ $node_1221_mobile }}</b><br/>
                    <a href="#" onclick="getTooltip({{$node_1221_user_id}},{{$node_1221_bc}})">BC {{ $node_1221_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3 text-center" style="{{ $node_1222_package == '2000' ? 'background-color:  #E5E4E2 !important; border-color:  #E5E4E2 !important;' : ''}}">
                                                      @if($node_1222_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1222_user_id.'/'.$node_1222_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b class="text-blue">{{ $node_1222_name }}</b><br />
                    <b>{{ $node_1222_mobile }}</b><br/>
                    <a href="#" onclick="getTooltip({{$node_1222_user_id}},{{$node_1222_bc}})">BC {{ $node_1222_bc }}</a>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
    console.log('here');
    var base_url = 'http://localhost/refinediamondvp/public/index.php/';
    function getTooltip(id,bc){
        console.log('got id and bc ', id, bc);
        //get data from server
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: base_url+'promotor/getbcdata',
            data: {
                id: id,
                bc: bc,
            },
            dataType: 'json',
            success: function (data) {
                if(data.status = 'success'){
                    console.log(data.name);
                    $(document).Toasts('create', {
                        body: '<table class="table table-sm table-borderless">'+
                        '<tr><td colspan="2">'+data.name+'</td></tr>'+
                        '<tr><td>Placement:</td><td>'+data.placement+'</td></tr>'+
                        '<tr><td>Joining Date:</td><td>'+data.joining_date+'</td></tr>'+
                        '<tr><td>Package:</td><td>'+data.package+'</td></tr>'+
                        '<tr><td>Sponsor ID:</td><td>'+data.sponsor_detail+'</td></tr>'+
                        '<tr><td>Team A: '+data.left+'</td><td>Team B: '+data.right+'</td></tr>'+
                        '<tr><td>Carry:</td><td>0</td></tr>'+
                        '<tr><td>Total Matching:</td><td>0</td></tr>'+
                        '</table>',
                        title: data.mobile,
                        subtitle: 'BC : '+data.user_bc,
                        icon: 'fas fa-envelope fa-lg',
                    });
                }
                else{
                    alert('An error occured');
                }
            }
        });



    }

    function viewPromotor() {
        var mobile = $('#usermobile').val();
        var bc = $('#userbc').val();

        //get id form user mobile and bc
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: base_url+'promotor/getPromotorDetails',
            data: {
                mobile: mobile,
                bc: bc,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if(data.user_id){
                    window.location.href = base_url+"promotor/tree/"+data.user_id+"/"+bc;
                }
                else{
                    alert('user not found');
                }
            }
        });


        // window.location.href = "http://localhost/refinediamond/public/index.php/promotor/tree/32/1";
    }
</script>
@endsection
