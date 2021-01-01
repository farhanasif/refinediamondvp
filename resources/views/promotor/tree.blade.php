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
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="tf-tree tf-custom">
                        <ul>
                            <li>
                                <span class="tf-nc elevation-3">
                                  @if($node_1_user_id > 0)
                                    <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                    
                                        <b>{{ $node_1_mobile }}</b><br/>
                                        <b>BC {{ $node_1_bc }}</b>
                                  @else
                                      +
                                  @endif
                                </span>
                                <ul>
                                    <li>
                                        <span class="tf-nc elevation-3">
                                          @if($node_11_user_id > 0)
                                          <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
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
                                                <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                <b>{{ $node_111_mobile }}</b><br/>
                                                <b>BC {{ $node_111_bc }}</b>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1111_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1111_mobile }}</b><br/>
                                                        <b>BC {{ $node_1111_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1112_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
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
                                                  <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                  <b>{{ $node_112_mobile }}</b><br/>
                                                  <b>BC {{ $node_112_bc }}</b>
                                                  @else
                                                      +
                                                  @endif
                                                </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1121_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                       <b>{{ $node_1121_mobile }}</b><br/>
                                          <b>BC {{ $node_1121_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1122_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
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
                                          <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                    
                    <b>{{ $node_12_mobile }}</b><br/>
                                              <b>BC {{ $node_12_bc }}</b>
                                          @else
                                              +
                                          @endif
                                        </span>
                                        <ul>
                                            <li><span class="tf-nc elevation-3">
                                              @if($node_121_user_id > 0)
                                              <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                              <b>{{ $node_121_mobile }}</b><br/>
                                              <b>BC {{ $node_121_bc }}</b>
                                              @else
                                                  +
                                              @endif
                                            </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1211_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                    <b>{{ $node_1211_mobile }}</b><br/>
                                              <b>BC {{ $node_1211_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1212_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
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
                                                <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                    <b>{{ $node_122_mobile }}</b><br/>
                                              <b>BC {{ $node_122_bc }}</b>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1221_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                    <b>{{ $node_1221_mobile }}</b><br/>
                                              <b>BC {{ $node_1221_bc }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc elevation-3">
                                                      @if($node_1222_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                    <b>{{ $node_122_mobile }}</b><br/>
                                              <b>BC {{ $node_122_bc }}</b>
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

</script>
@endsection
