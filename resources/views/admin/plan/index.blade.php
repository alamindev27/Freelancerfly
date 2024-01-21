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
                    <h1 class="m-0 text-dark">Plan List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Plan List</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="card card-primary">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Plan List</h3>
                            <a href="{{ route('plan.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Create Plan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th class="text-nowrap">#</th>
                            <th class="text-nowrap">Plan Name</th>
                            <th class="text-nowrap">Job Post Fee</th>
                            <th class="text-nowrap">Withdraw Fee</th>
                            <th class="text-nowrap">Post Bost Duraion</th>
                            <th class="text-nowrap">Daily Spin Limit</th>
                            <th class="text-nowrap">Deposit Refer Commission</th>
                            <th class="text-nowrap">Task Commission</th>
                            <th class="text-nowrap">Green Mark Badge</th>
                            <th class="text-nowrap">Profile Mark Badge</th>
                            <th class="text-nowrap">Call Support</th>
                            <th class="text-nowrap">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td class="align-middle text-nowrap">{{ ++$loop->index }}</td>
                                    <td class="align-middle text-nowrap"><b>{{ $data->plan_name }}</b></td>
                                    <td class="align-middle text-nowrap">{{ $data->job_post_fee }}%</td>
                                    <td class="align-middle text-nowrap">{{ $data->withdraw_fee }}%</td>
                                    <td class="align-middle text-nowrap">{{ $data->post_bost_duration }} Minutes</td>
                                    <td class="align-middle text-nowrap">${{ $data->daily_spin_limit }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->deposit_refer_commission }}%</td>
                                    <td class="align-middle text-nowrap">{{ $data->task_commission }}%</td>
                                    <td class="align-middle text-nowrap">{{ $data->geen_mark_badge == 'yes' ? 'Yes' : 'N/A' }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->profile_mark_badge == 'yes' ? 'Yes' : 'N/A' }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->live_phone_call_support == 'yes' ? 'Yes' : 'N/A' }}</td>
                                    <td class="align-middle text-nowrap">
                                        <form action="{{ route('plan.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{ route('plan.edit', $data->id) }}" class="text-info"><i class="fas fa-edit"></i></a>
                                            <button type="submit" class="text-danger border-0" style="background: none" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></button>
                                        </form>
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
