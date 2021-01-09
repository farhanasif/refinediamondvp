@extends('admin.admin_master')

@section('dashobard_title', 'Promoter Dashboard')
@section('admin_content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Promoter Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="page-header" style="margin:  0;padding: 0;">
      <marquee>
        <h3 style="color:#0000a0; "> Welcome To RefineDimond 2020 Limited.</h3>
      </marquee>
    </div>


      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div style="line-height: 10px;" class="inner">
                <p>Activation Date</p>
                <p>2020-10-04</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div style="line-height: 3px;" class="inner">
                 <p>Total Point Self</p>
                 <p>Total: Null</p>
                 <p>Remain: 0</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div style="line-height: 3px;" class="inner">
              <p>Referencec Point</p>
              <p>Today: 0</p>
              <p>Total: 0</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div style="line-height: 3px;" class="inner">
             <p>Income Account Sponsor</p>
             <p>Today: 0</p>
             <p>Total: 0</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div style="line-height: 3px;" class="inner">
                <p>Purchase Account Sponsor</p>
                <p>Today: 0</p>
                <p>Total: 0</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div style="line-height: 3px;" class="inner">
               <p>Down Member Today</p>
               <p>Today: 0</p>
               <p>Total: 0</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div style="line-height: 3px;" class="inner">
                <p>Down Member Total</p>
                <p>1st: Null</p>
                <p>2nd: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div style="line-height: 3px;" class="inner">
                <p>Today Point (Team)</p>
                <p>1st: Null</p>
                <p>2nd: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div style="line-height: 3px;" class="inner">
                <p>Down Member Total</p>
                <p>1st: Null</p>
                <p>2nd: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div style="line-height: 3px;" class="inner">
                <p>Today Point (Team)</p>
                <p>1st: Null</p>
                <p>2nd: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div style="line-height: 3px;" class="inner">
                <p>Total Point (Team)</p>
                <p>1st: Null</p>
                <p>2nd: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div style="line-height: 8px;" class="inner">
                <p>Auto Board Commission</p>
                <p>Today: 32323</p>
                <p>Total: 454545</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div style="line-height: 3px;" class="inner">
                <p>Sponsor Commission</p>
                <p>Today: Null</p>
                <p>Total: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div style="line-height: 3px;" class="inner">
                <p>Matching Commission</p>
                <p>Today: Null</p>
                <p>Total: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div style="line-height: 3px;" class="inner">
                <p>Generation Commission</p>
                <p>Today: Null</p>
                <p>Total: Null</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div style="line-height: 3px;" class="inner">
                <p>Bonus</p>
                <p>Today: 0</p>
                <p>Total: 0</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->

      <!-- Purchase wallet and cash wallet -->
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="row">
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div style="line-height: 3px;" class="inner">
                <p>Cash Wallet</p>
                <p>Total In : 0</p>
                <p>Total Out : 0</p>
                <p>Balance : BDT 0,00.00</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
           </div>
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div style="line-height: 3px;" class="inner">
                <p>Purchase Wallet</p>
                <p>Total In : 0</p>
                <p>Total Out : 0</p>
                <p>Balance : BDT -21,000.00</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
           </div>

          </div>
      </div>
     
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
      <section class="col-lg-6 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Promoto
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Super Binary Tree</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <section class="panel panel-default">
         
                  <table class="table table-hover personal-task">
                    <style type="text/css">

                    </style>
                    <tbody>
                      <tr>
                        <td style="padding: 11px 0px 11px 18px;">Name</td>
                        <td style="text-align: center;">RDLTesting</td>
                      </tr> 
                      <!--<tr> 
                        <td style="padding: 11px 0px 11px 18px;">Membership Pack</td>
                        <td style="text-align: center;"></td>
                      </tr>  
                      <tr>
                        <td style="padding: 11px 0px 11px 18px;">DOB</td>
                        <td style="text-align: center;">1992-05-25</td>
                      </tr>-->
                      <tr> 
                        <td style="padding: 11px 0px 11px 18px;">Mobile</td>
                        <td style="text-align: center;">01857646694</td>
                      </tr> 
                      <tr>    
                        <td style="padding: 11px 0px 11px 18px;">Email</td>
                        <td style="text-align: center;">dfgfd@fdgfdg.dfgfd</td>
                      </tr>
                      <!--<tr>    
                        <td colspan="2" style="text-align: center;"><h3 style="text-align:center;color:green;">You Have To Collect 15 BV Before 1st January </h3></td>
                      </tr>-->
                    </tbody>
                  </table>
                </section>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-6 connectedSortable ui-sortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="panel-heading">
                  <i class="clip-stats"></i>
                  Announcement 
                </div>
                <div class="panel-body progress-panel">
              <table class="table table-hover personal-task">
                <tbody>
                  <tr>
                    </tr><tr>
                      <th>Date</th>
                      <th>Message</th>
                    </tr>
                    <tr>
                      <td style="font-size:14px;font-weight:bold;text-align:center;min-width: 112px;">2017-10-11</td>
                      <td style="font-size:14px;font-weight:bold;text-align:center;">
                        Refine Diamond Open Signup and Unlimited Income For all Users.
                        Refine Diamond Open Signup and Unlimited Income For all Users.
                        Refine Diamond Open Signup and Unlimited Income For all Users.
                      </td>
                    </tr>
                  
                </tbody>
              </table>
            </div>
              </div>
              <!-- /.card -->
            </section>

        </div>
      </div>

    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
      <section class="col-lg-6 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="panel-heading">
                <i class="clip-stats"></i>
                Self Account
                
              </div>
              <div class="card-body">
                <div class="panel-body progress-panel" style="min-height: 336px;max-height: 336px;overflow: auto;">
          <table class="table table-hover personal-task">
            <tbody>
              <tr>
                </tr><tr>
                  <th>Profile Picture</th>
                  <th>Username</th>
                  <th>Earnings</th>
                  <th>Action</th>
                </tr>        
              <tr>
                <td><img src="photo/1000.jpg" alt="" style="width: 40px;border-radius: 4px;padding: 1px;"></td>
                <td>BC-1</td>
                <td><span class="btn btn-bricky badge"> 0.00 </span></td>
                <td><a href="log_self.php?user=MTAwMA==&amp;acc=BC-1" class="btn btn-info">Login To BC-1</a></td>
              </tr>           
              <tr>
                <td><img src="photo/avatar.jpg" alt="" style="width: 40px;border-radius: 4px;padding: 1px;"></td>
                <td>BC-2</td>
                <td><span class="btn btn-bricky badge"> 0.00 </span></td>
                <td><a href="log_self.php?user=NDExNjg=&amp;acc=BC-2" class="btn btn-info">Login To BC-2</a></td>
              </tr>
                            
              <tr>
                <td colspan="4" style="text-align: right;"><a href="add_center.php" class="btn btn-info"><span class="fa fa-plus"></span> Add New Center </a></td>
              </tr>       
            </tbody>
          </table>
        </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
      </div>
    </div>

@endsection