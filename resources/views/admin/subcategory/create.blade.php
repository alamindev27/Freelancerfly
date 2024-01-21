@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Sub-Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Sub-Category</li>
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
                      <h3 class="card-title">Create Sub-Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select name="category" id="category" class="form-control">
                            <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                          </select>
                          @error('category')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="subcategory_name">SubCategory Name</label>
                          <input type="text" name="subcategory_name" class="form-control" id="subcategory_name" placeholder="Enter sub category name" value="{{ old('subcategory_name') }}">
                          @error('subcategory_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="rate">Rate</label>
                          <input type="number" min="0.001" step="0.001" name="rate" class="form-control" id="rate" placeholder="Enter rate" value="{{ old('rate') }}">
                          @error('rate')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save & Create</button>
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
