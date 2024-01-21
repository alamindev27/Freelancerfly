@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Getway</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Getway</li>
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
                      <h3 class="card-title">Edit Getway</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('getway.update', $getway->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                      <div class="card-body">
                        <div class="form-group">
                            <label for="account_name">Account Name</label>
                            <input type="text" name="account_name" class="form-control" id="account_name" placeholder="Enter category name" value="{{ old('account_name') ?? $getway->account_name }}">
                            @error('account_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="account_number">Account Number</label>
                            <input type="number" name="account_number" class="form-control" id="account_number" placeholder="Enter category name" minlength="11" maxlength="11" value="{{ old('account_number') ?? $getway->account_number }}">
                            @error('account_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="account_type">Account Type</label>
                            <select name="account_type" id="account_type" class="form-control">
                                <option {{ $getway->account_type == 'personal' ? 'selected' : '' }} value="personal">Personal</option>
                                <option {{ $getway->account_type == 'agent' ? 'selected' : '' }} value="agent">Agent</option>
                            </select>
                            @error('account_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="charge">Withdraw Charge <span class="text-danger">without persentage</span></label>
                            <input type="number" name="charge" class="form-control" id="charge" placeholder="Enter category name" min="1" max="100" value="{{ old('charge') ?? $getway->charge }}">
                            @error('charge')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label for="image">logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="logo" id="logo">
                                        <label class="custom-file-label" for="logo">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 mt-2">
                                <img src="{{ asset($getway->logo) }}" alt="{{ $getway->account_name }}" width="60" class="border p-1 mt-3 rounded">
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
