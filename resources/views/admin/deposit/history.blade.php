@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Deposit History</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Deposit History</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="card card-primary">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Deposit History</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th class="text-nowrap">#</th>
                            <th class="text-nowrap">User</th>
                            <th class="text-nowrap">TRX ID</th>
                            <th class="text-nowrap">Payment Getway</th>
                            <th class="text-nowrap">Number</th>
                            <th class="text-nowrap">Amount</th>
                            <th class="text-nowrap">BDT Amount</th>
                            <th class="text-nowrap">Date</th>
                            <th class="text-nowrap">Status</th>
                            <th class="text-nowrap">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td class="align-middle text-nowrap">{{ ++$loop->index }}</td>
                                    <td class="align-middle text-nowrap">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="{{ asset($data->depositWithUserRelation->avatar) }}" alt="{{ $data->depositWithUserRelation->name }}" width="50" class="rounded rounded-circle border p-1">
                                            <div class="ml-2">
                                                <b>{{ $data->depositWithUserRelation->name }}</b>
                                                <span class="d-block">ID: <b>{{ $data->depositWithUserRelation->profile_id }}</b></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-nowrap">#{{ $data->trx_id }}</td>
                                    <td class="align-middle text-nowrap">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="{{ asset($data->depositWithGetwayRelation->logo) }}" alt="{{ $data->depositWithGetwayRelation->account_name }}" width="50">
                                            <div class="ml-2">
                                                <b>{{ $data->depositWithGetwayRelation->account_name }}</b>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-nowrap">${{ $data->sender_number }}</td>
                                    <td class="align-middle text-nowrap">${{ $data->amount }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->bdt_amount }}BDT</td>
                                    <td class="align-middle text-nowrap">{{ Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</td>
                                    <td class="align-middle text-nowrap">
                                        @if ($data->status == 'pending')
                                            <span class="badge badge-secondary">Pending</span>
                                        @elseif($data->status == 'success')
                                            <span class="badge badge-success">Success</span>
                                        @else
                                            <span class="badge badge-danger">Rejected</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-nowrap">
                                        @if ($data->status == 'pending')
                                            <a href="{{ route('admin.deposit.rejectedStatus', $data->id) }}" class="text-danger mx-1">Rejected</a>
                                            <a href="{{ route('admin.deposit.approvedStatus', $data->id) }}" class="text-success mx-1">Approved</a>
                                            <a href="{{ route('admin.deposit.delete', $data->id) }}" class="text-danger mx-1">Delete</a>
                                        @elseif($data->status == 'success')
                                            <a href="{{ route('admin.deposit.delete', $data->id) }}" class="text-danger mx-1">Delete</a>
                                        @else
                                            <a href="{{ route('admin.deposit.delete', $data->id) }}" class="text-danger mx-1">Delete</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
@endsection
@section('scripts')
{{-- others scripts here --}}
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
