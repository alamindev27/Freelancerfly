@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">General Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Setting</li>
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
                      <h3 class="card-title">General Setting</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.setting.siteUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="author_name">Author Name</label>
                          <input type="text" name="author_name" class="form-control" id="author_name" placeholder="Enter author name" value="{{ old('author_name') ?? setting()->author_name }}">
                          @error('author_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="site_name">Site Name</label>
                          <input type="text" name="site_name" class="form-control" id="site_name" placeholder="Enter site name" value="{{ old('site_name') ?? setting()->site_name }}">
                          @error('site_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label for="site_logo">Site Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="site_logo" id="site_logo">
                                        <label class="custom-file-label" for="site_logo">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('site_logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 mt-2">
                                <img src="{{ asset(setting()->site_logo) }}" alt="{{ asset(setting()->site_name) }}" class="img-fluid border rounded mt-4 p-1" width="120">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label for="site_favicon">Site Favicon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="site_favicon" id="site_favicon">
                                        <label class="custom-file-label" for="site_favicon">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('site_favicon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 mt-2">
                                <img src="{{ asset(setting()->site_favicon) }}" alt="{{ asset(setting()->site_name) }}" class="img-fluid border rounded mt-4 p-1" width="60">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="footer_message">Footer Message</label>
                            <input type="text" name="footer_message" class="form-control" id="footer_message" placeholder="Enter site name" value="{{ old('footer_message') ?? setting()->footer_message }}">
                            @error('footer_message')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="footer_address">Footer Address</label>
                            <input type="text" name="footer_address" class="form-control" id="footer_address" placeholder="Enter site name" value="{{ old('footer_address') ?? setting()->footer_address }}">
                            @error('footer_address')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="footer_email">Footer Email</label>
                            <input type="text" name="footer_email" class="form-control" id="footer_email" placeholder="Enter site name" value="{{ old('footer_email') ?? setting()->footer_email }}">
                            @error('footer_email')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="footer_number">Footer Number</label>
                            <input type="text" name="footer_number" class="form-control" id="footer_number" placeholder="Enter site name" value="{{ old('footer_number') ?? setting()->footer_number }}">
                            @error('footer_number')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                      <!-- /.card-body -->

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
