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
                    <h1 class="m-0 text-dark">SubCategory List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">SubCategory List</li>
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
                            <h3 class="card-title">SubCategory List</h3>
                            <a href="{{ route('subcategory.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Create SubCategory</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>SubCategory</th>
                            <th>Rate</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>
                                    <td class="align-middle">
                                        <b class="ml-2">{{ $data->subCategoryWithCategoryRelation->category_name }}</b>
                                    </td>
                                    <td class="align-middle">
                                        <b class="ml-2">{{ $data->subcategory_name }}</b>
                                    </td>
                                    <td class="align-middle">${{ $data->rate }}</td>
                                    <td class="align-middle">
                                        <form action="{{ route('subcategory.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{ route('subcategory.edit', $data->id) }}" class="text-info"><i class="fas fa-edit"></i></a>
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
