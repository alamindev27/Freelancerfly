@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Banner Update</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Banner Update</li>
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
                      <h3 class="card-title">Banner Update</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.banner.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="heading_first_part">Heading First Part</label>
                          <input type="text" name="heading_first_part" class="form-control" id="heading_first_part" placeholder="Enter heading first part" value="{{ old('heading_first_part') ?? $data->heading_part_1 }}">
                          @error('heading_first_part')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="heading_second_part">Heading Second Part</label>
                          <input type="text" name="heading_second_part" class="form-control" id="heading_second_part" placeholder="Enter heading second part" value="{{ old('heading_second_part') ?? $data->heading_part_2 }}">
                          @error('heading_second_part')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="heading_third_part">Heading Third Part</label>
                          <input type="text" name="heading_third_part" class="form-control" id="heading_third_part" placeholder="Enter heading third part" value="{{ old('heading_third_part') ?? $data->heading_part_3 }}">
                          @error('heading_third_part')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="text">Text</label>
                          <input type="text" name="text" class="form-control" id="text" placeholder="Enter text" value="{{ old('text') ?? $data->text }}">
                          @error('text')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>




                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label for="image_rounded">Rounded Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image_rounded" id="image_rounded">
                                        <label class="custom-file-label" for="image_rounded">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('image_rounded')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 mt-3">
                                <img src="{{ asset($data->image_rounded) }}" alt="" class="border p-1 rounded mt-2 img-fluid" width="80">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label for="image_circle">Circle Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image_circle" id="image_circle">
                                        <label class="custom-file-label" for="image_circle">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('image_circle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 mt-3">
                                <img src="{{ asset($data->image_circle) }}" alt="" class="border p-1 rounded mt-2 img-fluid" width="80">
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
