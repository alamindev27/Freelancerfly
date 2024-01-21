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
                    <h1 class="m-0 text-dark">Meta Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Meta Setting</li>
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
                      <h3 class="card-title">Meta Setting</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.setting.siteMetaUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter meta title" value="{{ old('meta_title') ?? $data->meta_title }}">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('notMatch'))
                                <span class="text-danger">{{ session('notMatch') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="focus_keywords">Focus Keywords</label>
                            <input type="text" name="focus_keywords" data-role="tagsinput" class="form-control" id="focus_keywords" placeholder="Enter focus keywords" value="{{ old('focus_keywords') ?? $data->focus_keywords }}">
                            @error('focus_keywords')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('notMatch'))
                                <span class="text-danger">{{ session('notMatch') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" data-role="tagsinput" class="form-control" id="meta_keywords" placeholder="Enter meta keywords" value="{{ old('meta_keywords') ?? $data->meta_keywords }}">
                            @error('meta_keywords')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('notMatch'))
                                <span class="text-danger">{{ session('notMatch') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" rows="5" class="form-control" placeholder="Enter meta description">{{ old('meta_description') ?? $data->meta_description }}</textarea>
                            @error('meta_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('notMatch'))
                                <span class="text-danger">{{ session('notMatch') }}</span>
                            @endif
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
<script src="{{ asset('assets/plugins/bootstap-tagsinput/bootstrap-tagsinput.js') }}"></script>
@endsection
