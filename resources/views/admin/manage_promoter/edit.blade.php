@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Create Promoter')
@section('dashobard_title', 'Create Promoter')
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
              <li class="breadcrumb-item active"> Promoter</li>
              <li class="breadcrumb-item active">Create Promoter Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
           Create Promoter
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-12">
                <form method="post" action="{{ route('managePromoter.update',$promoter->id) }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="promoter_id">Promoter ID</label>
                              <input type="text" name="promoter_id" class="form-control" placeholder=" Enter promoter ID" value="{{ $promoter->promoter_id }}">
                            @if($errors->has('promoter_id'))
                              <p class="text-danger">{{ $errors->first('promoter_id') }}</p>
                            @endif
                          </div>
      
                          <div class="form-group col-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $promoter->name }}">
                              @if($errors->has('name'))
                              <p class="text-danger">{{ $errors->first('name') }}</p>
                              @endif
                          </div>
      
                          <div class="form-group col-6">
                              <label for="email">Email</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $promoter->email }}">
                                @if($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
      
                            <div class="form-group col-6">
                              <label for="mobile">Contact Number</label>
                              <input type="text" name="mobile" class="form-control" placeholder="Enter contact number" value="{{ $promoter->mobile }}">
                                @if($errors->has('mobile'))
                                <p class="text-danger">{{ $errors->first('mobile') }}</p>
                                @endif
                            </div>
      
                          <div class="form-group col-6">
                              <label for="address">Address</label>
                              <textarea name="address" id="" class="form-control" cols="3" rows="3" placeholder="Enter address">{{ $promoter->address }}</textarea>
                              @if($errors->has('address'))
                                  <p class="text-danger">{{ $errors->first('address') }}</p>
                              @endif
                          </div>
      
                          <div class="form-group col-6">
                              <label for="country">Country</label>
                              <select name="country" id="" class="form-control">
                                  <option value="">--select Country name--</option>
                                  <option {{ $promoter->country == 'Bangladesh' ? 'selected' : '' }} value="Bangladesh">Bangladesh</option>
                              </select>
                              @if($errors->has('country'))
                                  <p class="text-danger">{{ $errors->first('country') }}</p>
                              @endif
                          </div>
      
                          <div class="form-group col-6">
                              <label for="password">Password</label>
                              <input type="text" name="password" class="form-control" placeholder="Enter password" value="{{ $promoter->password }}">
                              @if($errors->has('password'))
                                  <p class="text-danger">{{ $errors->first('password') }}</p>
                              @endif
                          </div>

                        <div class="form-group col-6">
                            <label for="transaction_password">Transaction Password</label>
                            <input type="text" name="transaction_password" class="form-control" placeholder="Enter transaction password" value="{{ $promoter->transaction_password }}">
                            @if($errors->has('transaction_password'))
                                <p class="text-danger">{{ $errors->first('transaction_password') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('managePromoter.index') }}" class="btn btn-info ">Back</a>
                     </div>
                  </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection