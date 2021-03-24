@extends('admin.admin_master')

@section('dashobard_title', 'Request Purchase Amount Report')
@section('admin_content')

<section class="content mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Purchase Amount Requests</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6">

                  </div>
                  <div class="col-sm-12 col-md-6">

                 </div>
               </div><div class="row">
                <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL.No
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Mobile
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Amount
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Submitted at
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Updated at
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Transaction ID
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Payment Type
                  </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">{{$result->id}}</td>
                            <td>{{$result->phone_number}}</td>
                            <td>{{$result->amount}}</td>
                            <td><b>{{$result->status}}</b></td>
                            <td>{{$result->created_at}}</td>
                            <td>{{$result->updated_at}}</td>
                            <td>{{$result->trxid}}</td>
                            <td>{{$result->ptype}}</td>
                        </tr>
                  @endforeach
              </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>





@endsection

@section('custom_js')
   <script>

    </script>
@endsection