@extends('admin.admin_master')

@section('dashobard_title', 'Investment')
@section('admin_content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Investment & Share Panel</h1>
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
                <h3>1</h3>
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
                <h3>0</h3>

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
                <h3>0</h3>

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
                <h3>0</h3>

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
                    <a href="{{route('promotor.investment-entry')}}" type="button" class="btn btn-block bg-gradient-primary">Add a new panel user</a>
                </div>
                <div class="col-6">
                    <a href="" type="button" class="btn btn-block bg-gradient-success">Add a demand request</a>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-6">
                    <a href="" type="button" class="btn btn-block bg-gradient-danger">View all demand request</a>
                </div>
                <div class="col-6">
                    <a href="" type="button" class="btn btn-block bg-gradient-warning">Place an investment user</a>
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
