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

  /* make the horizontal and vertical connectors thick and change their color */

  .tf-custom .tf-nc:before,
  .tf-custom .tf-nc:after {
    border-left-color: gold;
    border-left-width: 2px;
  }

  .tf-custom li li:before {
    border-top-color: gold;
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
                                <span class="tf-nc elevation-3">
                                  @if($node_1_user_id > 0)
                                    <a href="{{ url('/promotor/tree/'.$node_1_user_id.'/'.$node_1_bc) }}">
                                        <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                        style="opacity: .8" onmouseover="getTooltip({{$node_1_user_id}},{{$node_1_bc}})">
                                    </a>
                                    <br/>

                                    <b>{{ $node_1_mobile }}</b>
                                    <br/>
                                    <b>BC {{ $node_1_bc }}</b>
                                  @else
                                      +
                                  @endif
                                </span>
                                <ul>
                                    <li>
                                        <span class="tf-nc elevation-3">
                                          @if($node_11_user_id > 0)
                                          <a href="{{ url('/promotor/tree/'.$node_11_user_id.'/'.$node_11_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                          <b>{{ $node_11_mobile }}</b><br/>
                                          <b>BC {{ $node_11_bc }}</b>
                                          @else
                                              +
                                          @endif
                                        </span>
                                        <ul>
                                            <li>
                                              <span class="tf-nc  elevation-3">
                                                @if($node_111_user_id > 0)
                                                <a href="{{ url('/promotor/tree/'.$node_111_user_id.'/'.$node_111_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                                <b>{{ $node_111_mobile }}</b><br/>
                                                <b>BC {{ $node_111_bc }}</b>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1111_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1111_user_id.'/'.$node_1111_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                                        <b>{{ $node_1111_mobile }}</b><br/>
                                                        <b>BC {{ $node_1111_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1112_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1112_user_id.'/'.$node_1112_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                                      <b>{{ $node_1112_mobile }}</b><br/>
                                                      <b>BC {{ $node_1112_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="tf-nc elevation-3">
                                                  @if($node_112_user_id > 0)
                                                  <a href="{{ url('/promotor/tree/'.$node_112_user_id.'/'.$node_112_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                                  <b>{{ $node_112_mobile }}</b><br/>
                                                  <b>BC {{ $node_112_bc }}</b>
                                                  @else
                                                      +
                                                  @endif
                                                </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1121_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1121_user_id.'/'.$node_1121_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                       <b>{{ $node_1121_mobile }}</b><br/>
                                          <b>BC {{ $node_1121_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1122_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1122_user_id.'/'.$node_1122_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b>{{ $node_1122_mobile }}</b><br/>
                                          <b>BC {{ $node_1122_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="tf-nc elevation-3">
                                          @if($node_12_user_id > 0)
                                          <a href="{{ url('/promotor/tree/'.$node_12_user_id.'/'.$node_12_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>

                    <b>{{ $node_12_mobile }}</b><br/>
                                              <b>BC {{ $node_12_bc }}</b>
                                          @else
                                              +
                                          @endif
                                        </span>
                                        <ul>
                                            <li><span class="tf-nc elevation-3">
                                              @if($node_121_user_id > 0)
                                              <a href="{{ url('/promotor/tree/'.$node_121_user_id.'/'.$node_121_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                                              <b>{{ $node_121_mobile }}</b><br/>
                                              <b>BC {{ $node_121_bc }}</b>
                                              @else
                                                  +
                                              @endif
                                            </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1211_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1211_user_id.'/'.$node_1211_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b>{{ $node_1211_mobile }}</b><br/>
                                              <b>BC {{ $node_1211_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1212_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1212_user_id.'/'.$node_1212_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b>{{ $node_1212_mobile }}</b><br/>
                                              <b>BC {{ $node_1212_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                            <li><span class="tf-nc elevation-3">
                                                @if($node_122_user_id > 0)
                                                <a href="{{ url('/promotor/tree/'.$node_122_user_id.'/'.$node_122_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b>{{ $node_122_mobile }}</b><br/>
                                              <b>BC {{ $node_122_bc }}</b>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1221_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1221_user_id.'/'.$node_1221_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b>{{ $node_1221_mobile }}</b><br/>
                                              <b>BC {{ $node_1221_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1222_user_id > 0)
                                                      <a href="{{ url('/promotor/tree/'.$node_1222_user_id.'/'.$node_1222_bc) }}"><img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"></a><br/>
                    <b>{{ $node_122_mobile }}</b><br/>
                                              <b>BC {{ $node_1222_bc }}</b>
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
    function getTooltip(id,bc){
        console.log('got id and bc ', id, bc);
        //get details of the account

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
            url: 'http://localhost/refinediamondvp/public/index.php/promotor/getPromotorDetails',
            data: {
                mobile: mobile,
                bc: bc,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if(data.user_id){
                    window.location.href = "http://localhost/refinediamondvp/public/index.php/promotor/tree/"+data.user_id+"/"+bc;
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
