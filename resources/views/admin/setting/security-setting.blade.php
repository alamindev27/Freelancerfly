@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Security Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Security Setting</li>
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
                      <h3 class="card-title">Security Setting</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.setting.securityUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="current_password">Current Password</label>
                          <input type="password" name="current_password" class="form-control" id="current_password" placeholder="Enter current password">
                          @error('current_password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                          @if (session('notMatch'))
                            <span class="text-danger">{{ session('notMatch') }}</span>
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="password">New Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Enter new password">
                          @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="password_confirmation">Confirmation Password</label>
                          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Enter confirmation password">
                          @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save & Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </section>
@endsection
@section('scripts')
{{-- others scripts here --}}
@endsection
