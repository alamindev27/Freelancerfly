@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Steps</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Steps</li>
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
                      <h3 class="card-title">Edit Steps</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.responsibility.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="heading">Heading</label>
                          <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Heading" value="{{ old('heading') ?? $data->heading }}">
                          @error('heading')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="text">Text</label>
                          <input type="text" name="text" class="form-control" id="text" placeholder="Enter Text" value="{{ old('text') ?? $data->text }}">
                          @error('text')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                              <label for="check_1">Check 1</label>
                              <input type="text" name="check_1" class="form-control" id="check_1" placeholder="Enter check_1" value="{{ old('check_1') ?? $data->check_1 }}">
                              @error('check_1')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-lg-6">
                              <label for="check_2">Check 2</label>
                              <input type="text" name="check_2" class="form-control" id="check_2" placeholder="Enter check_2" value="{{ old('check_2') ?? $data->check_2 }}">
                              @error('check_2')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-lg-6">
                              <label for="check_3">Check 3</label>
                              <input type="text" name="check_3" class="form-control" id="check_3" placeholder="Enter check_3" value="{{ old('check_3') ?? $data->check_3 }}">
                              @error('check_3')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-lg-6">
                              <label for="check_4">Check 4</label>
                              <input type="text" name="check_4" class="form-control" id="check_4" placeholder="Enter check_4" value="{{ old('check_4') ?? $data->check_4 }}">
                              @error('check_4')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card border">
                                    <div class="card-header">
                                        <h5 class="cart-title font-weight-bold">Step 1</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="step_one_title">Step One Title</label>
                                            <input type="text" name="step_one_title" class="form-control" id="step_one_title" placeholder="Enter step_one_title" value="{{ old('step_one_title') ?? $data->step_one_title }}">
                                            @error('step_one_title')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                        <div class="form-group">
                                            <label for="step_one_text">Step One Text</label>
                                            <input type="text" name="step_one_text" class="form-control" id="step_one_text" placeholder="Enter step_one_text" value="{{ old('step_one_text') ?? $data->step_one_text }}">
                                            @error('step_one_text')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="step_one_icon">Step One Icon</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="step_one_icon" id="step_one_icon">
                                                    <label class="custom-file-label" for="step_one_icon">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                            @error('step_one_icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <img src="{{ asset($data->step_one_icon) }}" alt="" width="40" class="border p-1 rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border">
                                    <div class="card-header">
                                        <h5 class="cart-title font-weight-bold">Step 2</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="step_two_title">Step Two Title</label>
                                            <input type="text" name="step_two_title" class="form-control" id="step_two_title" placeholder="Enter step_two_title" value="{{ old('step_two_title') ?? $data->step_two_title }}">
                                            @error('step_two_title')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                        <div class="form-group">
                                            <label for="step_two_text">Step Two Text</label>
                                            <input type="text" name="step_two_text" class="form-control" id="step_two_text" placeholder="Enter step_two_text" value="{{ old('step_two_text') ?? $data->step_two_text }}">
                                            @error('step_two_text')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="step_two_icon">Step Two Icon</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="step_two_icon" id="step_two_icon">
                                                    <label class="custom-file-label" for="step_two_icon">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                            @error('step_two_icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <img src="{{ asset($data->step_two_icon) }}" alt="" width="40" class="border p-1 rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border">
                                    <div class="card-header">
                                        <h5 class="cart-title font-weight-bold">Step 3</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="step_three_title">Step Theree Title</label>
                                            <input type="text" name="step_three_title" class="form-control" id="step_three_title" placeholder="Enter step_three_title" value="{{ old('step_three_title') ?? $data->step_three_title }}">
                                            @error('step_three_title')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                        <div class="form-group">
                                            <label for="step_three_text">Step Theree Text</label>
                                            <input type="text" name="step_three_text" class="form-control" id="step_three_text" placeholder="Enter step_three_text" value="{{ old('step_three_text') ?? $data->step_three_text }}">
                                            @error('step_three_text')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="step_three_icon">Step Theree Icon</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="step_three_icon" id="step_three_icon">
                                                    <label class="custom-file-label" for="step_three_icon">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                            @error('step_three_icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <img src="{{ asset($data->step_three_icon) }}" alt="" width="40" class="border p-1 rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border">
                                    <div class="card-header">
                                        <h5 class="cart-title font-weight-bold">Step 4</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="step_four_title">Step Four Title</label>
                                            <input type="text" name="step_four_title" class="form-control" id="step_four_title" placeholder="Enter step_four_title" value="{{ old('step_four_title') ?? $data->step_four_title }}">
                                            @error('step_four_title')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                        <div class="form-group">
                                            <label for="step_four_text">Step Four Text</label>
                                            <input type="text" name="step_four_text" class="form-control" id="step_four_text" placeholder="Enter step_four_text" value="{{ old('step_four_text') ?? $data->step_four_text }}">
                                            @error('step_four_text')
                                              <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="step_four_icon">Step Four Icon</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="step_four_icon" id="step_four_icon">
                                                    <label class="custom-file-label" for="step_four_icon">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                            @error('step_four_icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <img src="{{ asset($data->step_four_icon) }}" alt="" width="40" class="border p-1 rounded">
                                    </div>
                                </div>
                            </div>
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
