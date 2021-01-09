@extends('admin.admin_master')

@section('dashobard_title', 'Admin Dashboard')
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
              <li class="breadcrumb-item active">Admin  Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                  <div class="card bg-danger">
                      <div class="card-body">
                          <div class="content">
                              <div class="title" style="font-size: 21px;">BDT 1000000000</div>
                              <div class="sub-title">Current Working Capital</div>
                          </div>
                          <div class="clear-both"></div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                  <div class="card bg-yellow">
                      <div class="card-body">
                          <div class="content">
                              <div class="title" style="font-size: 21px;">BDT 1000000000</div>
                              <div class="sub-title">Current Account Balance</div>
                          </div>
                          <div class="clear-both"></div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                  <div class="card bg-green">
                      <div class="card-body">
                          <div class="content">
                              <div class="title" style="font-size: 21px;">BDT 0</div>
                              <div class="sub-title">Total send to Member</div>
                          </div>
                          <div class="clear-both"></div>
                      </div>
                  </div>
              </a>
          </div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                  <div class="card bg-blue">
                      <div class="card-body">
                          <div class="content">
                            <div class="title" style="font-size: 21px;"> BDT </div>
                              <div class="sub-title">Incentive Balance</div>
                          </div>
                          <div class="clear-both"></div>
                      </div>
                  </div>
              </a>
          </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-bar-chart-o fa-fw"></i> Members 
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-4">
                  <!--<input type="text" id="yyy" placeholder="Search User" class="form-control" />-->
                  <div class="input-group">
                    <div class="input-group-btn">
                    <button type="button" style="margin:0;" class="btn btn-default dropdown-toggle search" data-toggle="dropdown" data-ssff="Member" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="nav-link"><a href="#">Member</a></li>
                      <li class="nav-link"><a href="#">Sponsor</a></li>
                    </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control" placeholder="Search User" aria-label="...">
                  </div><!-- /input-group -->
                </div>
                <div class="col-4">
                  <a href="#" class="btn btn-success">Current Balance Report</a>
                </div>
              </div>
              <br>


              <div class="row">
                <div class="col-3">
                    <a href="#" class="btn btn-info">Total Member (666)</a>
                </div>
                <div class="col-3">
                  <a href="#" class="btn btn-info">Country User</a>
                </div>
                <div class="col-3">
                  <a href="#" class="btn btn-info">Purchase Account</a>
                </div>
                <div class="col-3">
                  <a href="#" class="btn btn-info">Cash Wallet: 0.00</a>
                </div>
              </div>

              <br>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-4">
                  <select class="form-control">
                  <option value="">Select Option</option>
                  <option value="Bangladesh">Bangladesh ( 666 )</option></select>
                </div>
                <div class="col-md-4"></div>
              </div>
              <br>

              <div class="row">
                <div class="col-3">
                    <a href="#" class="btn btn-info">Total Active BC (0)</a>
                </div>
                <div class="col-3">
                  <a href="#" class="btn btn-info">Total ID: 301</a>
                </div>
                <div class="col-3">
                  <a href="#" class="btn btn-info">Purchase Account: 0</a>
                </div>
                <div class="col-3">
                  <a href="#" class="btn btn-info">Total Point: 9000</a>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-lg-12">
                  <div class="table-responsive" id="new_member">	
                      <table class="table table-bordered table-hover table-striped">
                        <thead>
                          <tr>
                            <th>SN:</th>       
                            <th>Hope ROY Payed:</th>
                            <th>User Id:</th>
                            <th>Member Name:</th>
                            <th>Business Center:</th>
                            <th>Sponsor:</th>
                            <th>JoinDate:</th>
                            <th>Active Date:</th>
                            <th>1G Active ID:</th>
                            <th>Purchase-Wallet:</th> 
                            <th>Cash Wallet:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>     
                            <td><a class="btn btn-success" href="#" id="color">01857646694</a></td>  
                            <td><a class="btn btn-success" href="#" style="color: white;background-color: red;">Inactive</a></td>
                            <td>RDLTesting (Bangladesh)</td>
                            <td>BC - 1</td>
                            <td></td>  
                            <td>2020-09-26</td> 
                            <td></td>                 
                            <td><a class="btn btn-warning" target="_blank" href="#">0</a></td>                                                          
                            <td></td> 
                            <td>0.00</td>
                          </tr>
                        </tbody>
                      
                        <tbody>
                          <tr>
                            <td>66</td>     
                            <td><a class="btn btn-success" href="#" id="color">01857646694</a></td>  
                            <td><a class="btn btn-success" href="#" style="color: white;background-color: red;">Inactive</a></td>
                            <td>RDLTesting (Bangladesh)</td>
                            <td>BC - 2</td>
                            <td></td>  
                            <td>2020-10-04</td> 
                            <td></td>                      
                            <td><a class="btn btn-warning" target="_blank" href="#">0</a></td>                                                              
                            <td></td> 
                            <td>0.00</td>
                          </tr>
                        </tbody>
                    </table>

                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 (nested) -->
              </div>

            </div>
          </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->

@endsection