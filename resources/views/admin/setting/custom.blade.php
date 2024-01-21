@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstap-tagsinput/bootstrap-tagsinput.css') }}">
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Custom Code</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Custom Code</li>
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
                      <h3 class="card-title">Custom Code</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.setting.siteMetaUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label for="header_style">Header Styles</label>
                            <textarea name="header_style" id="header_style" rows="5" class="form-control" placeholder="Enter header styles">{{ old('header_style') }}</textarea>
                            @error('header_style')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('notMatch'))
                                <span class="text-danger">{{ session('notMatch') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="footer_scripts">Footer Scripts</label>
                            <textarea name="footer_scripts" id="footer_scripts" rows="5" class="form-control" placeholder="Enter footer scripts">{{ old('footer_scripts') }}</textarea>
                            @error('footer_scripts')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('notMatch'))
                                <span class="text-danger">{{ session('notMatch') }}</span>
                            @endif
                        </div>

                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
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
<script src="{{ asset('assets/plugins/bootstap-tagsinput/bootstrap-tagsinput.js') }}"></script>
@endsection
