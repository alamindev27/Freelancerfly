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
                    <h1 class="m-0 text-dark">Pending Advertisement List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pending Advertisement List</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                  <div class="card card-primary">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Pending Advertisement List</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($advertisements as $data)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>
                                    <td class="align-middle">
                                        <img src="{{ asset($data->advertisementWithUserRelation->avatar) }}" alt="{{ $data->advertisementWithUserRelation->name }}" class="rounded border p-1 rounded-circle" width="60">
                                        <b>{{ $data->advertisementWithUserRelation->name }}</b>
                                    </td>
                                    <td class="align-middle">
                                        <img src="{{ asset($data->image) }}" alt="{{ $data->title }}" class="rounded border p-1" width="60">
                                        <a href="{{ $data->link }}"><b>{{ $data->title  }}</b></a>
                                    </td>
                                    <td class="align-middle text-capitalize">${{ $data->price }}</td>
                                    <td class="align-middle text-capitalize">{{ $data->status }}</td>

                                    <td class="align-middle">
                                        @if ($data->status == 'pending')
                                            <a href="{{ route('admin.advertisement.approvedStatus', $data->id) }}" class="btn btn-success btn-sm">Approved</a>
                                            <a href="{{ route('admin.advertisement.rejectedStatus', $data->id) }}" class="btn btn-danger btn-sm">Approved</a>
                                        @else
                                            <form action="{{ route('admin.advertisement.delete', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger border-0" style="background: none" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></button>
                                            </form>
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
