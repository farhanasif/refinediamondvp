@extends('admin.admin_master')

@section('dashobard_title', 'Investment')
@section('admin_content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Purchase & Service Panel</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $results[0]->king }}</h3>
                <p>KING PANEL</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{route('promotor.investment-details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $results[0]->prince }}</h3>

                <p>PRINCE PANEL</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('promotor.investment-details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $results[0]->royal }}</h3>
                <p>ROYAL PANEL</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('promotor.investment-details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $results[0]->gold }}</h3>

                <p>GOLD PANEL</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('promotor.investment-details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
    <div class="card card-default">
      <!-- /.card-header -->
      <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <a href="{{route('promotor.investment-entry')}}" type="button" class="btn btn-block bg-gradient-primary">Add a New Panel User</a>
                </div>
                <div class="col-6">
                    @if(Auth::user()->id == 52)
                    <a href="{{route('promotor.demand')}}" type="button" class="btn btn-block bg-gradient-success">Add a Purchase Demand Request</a>
                    @else
                    <a href="" type="button" class="btn btn-block bg-gradient-success">Add a demand request</a>
                    @endif
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-6">
                    <a href="{{route('promotor.drequest')}}" type="button" class="btn btn-block bg-gradient-danger">View Purchase & Sale Demand Request</a>
                </div>
                <div class="col-6">
                    <a href="{{route('promotor.investmentreport')}}" type="button" class="btn btn-block bg-gradient-warning">Place a Seller User</a>
                </div>
            </div>
      </div>
      <!-- /.card-body -->
    </div>
    <div class="card card-default">
      <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-tag"></i>
              Purchase & Service Links
            </h3>
          </div>

      <!-- /.card-header -->
      <div class="card-body">
            <div class="row pt-2">
                <div class="col-4">
                    <a href="https://rdlgroupbd.com/propertyuser/" type="button" class="btn btn-block bg-gradient-navy" target="_blank">RDL Properties</a>
                </div>
                <div class="col-4">
                    <a href="https://rdlgroupbd.com/propertyuser/" type="button" class="btn btn-block bg-gradient-orange" target="_blank">Coming Soon</a>
                </div>
                <div class="col-4">
                    <a href="https://rdlgroupbd.com/propertyuser/" type="button" class="btn btn-block bg-gradient-indigo" target="_blank">Coming Soon</a>
                </div>
            </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div><!-- /.container-fluid -->
</section>


@endsection

@section('custom_js')
   <script>

    </script>
@endsection
