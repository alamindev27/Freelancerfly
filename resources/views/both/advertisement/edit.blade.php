@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
            width: 13px !important;
        }
    </style>

    <style>
        .error_input {
            border: 1px solid #f00 !important;
        }

        .dropify-wrapper {
            margin-bottom: 10px;
        }

        .ls-inputicon-box .form-control {
            padding-left: 20px !important;
        }


        .form-control {
            padding: 10px !important;
        }
    </style>
@endsection
@section('content')
    <div class="page-wraper" style="transform: none;">
        <div class="page-content" style="transform: none;">
            <div class="section-full p-t70  p-b70 site-bg-white" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row" style="transform: none;">

                        @include('partials.profile-sidebar')



                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">

                            <div class="twm-right-section-panel site-bg-gray">

                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">Advertisement</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <form action="{{ route('advertisement.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Ads Title</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control" placeholder="Enter ads title" name="title" type="text" value="{{ old('title') ?? $data->title }}">
                                                        </div>
                                                        @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Target Destination</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control" placeholder="https://www.example.com" name="link" type="text" value="{{ old('link') ?? $data->link }}">
                                                        </div>
                                                        @error('link')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>




                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <div class="country-target-wrapper ">
                                                            <label for="day-1" id="1" class="category_item country-target-item {{ $data->duration ==  1 ? 'active' : ''}}">
                                                                <div><i class="fa fa-ad pt-1"></i> 1 Day</div>
                                                                <input type="radio" name="days" {{ $data->duration == 7 ? 'checked' : '' }} id="day-1" class="d-none" value="1" >
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <div class="country-target-wrapper ">
                                                            <label for="day-2" id="2" class="category_item country-target-item {{ $data->duration == 2 ? 'active' : '' }} ">
                                                                <div><i class="fa fa-ad pt-1"></i> 2 Day</div>
                                                                <input type="radio" name="days" {{ $data->duration == 7 ? 'checked' : '' }} id="day-2" class="d-none" value="2" >
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <div class="country-target-wrapper ">
                                                            <label for="day-13" id="3" class="category_item country-target-item {{ $data->duration == 3 ? 'active' : '' }} ">
                                                                <div><i class="fa fa-ad pt-1"></i> 3 Day</div>
                                                                <input type="radio" name="days" {{ $data->duration == 7 ? 'checked' : '' }} id="day-13" class="d-none" value="3" >
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <div class="country-target-wrapper ">
                                                            <label for="day-4" id="4" class="category_item country-target-item {{ $data->duration == 4 ? 'active' : '' }} ">
                                                                <div><i class="fa fa-ad pt-1"></i> 4 Day</div>
                                                                <input type="radio" name="days" {{ $data->duration == 7 ? 'checked' : '' }} id="day-4" class="d-none" value="4" >
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <div class="country-target-wrapper ">
                                                            <label for="day-5" id="5" class="category_item country-target-item {{ $data->duration == 5 ? 'active' : '' }} ">
                                                                <div><i class="fa fa-ad pt-1"></i> 5 Day</div>
                                                                <input type="radio" name="days" {{ $data->duration == 7 ? 'checked' : '' }} id="day-5" class="d-none" value="5" >
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <div class="country-target-wrapper ">
                                                            <label for="day-6" id="6" class="category_item country-target-item {{ $data->duration == 6 ? 'active' : '' }} ">
                                                                <div><i class="fa fa-ad pt-1"></i> 6 Day</div>
                                                                <input type="radio" name="days" {{ $data->duration == 7 ? 'checked' : '' }} id="day-6" class="d-none" value="6" >
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <div class="country-target-wrapper ">
                                                            <label for="day-17" id="7" class="category_item country-target-item {{ $data->duration == 7 ? 'active' : '' }} ">
                                                                <div><i class="fa fa-ad pt-1"></i> 7 Day</div>
                                                                <input type="radio" name="days" {{ $data->duration == 7 ? 'checked' : '' }} id="day-7" class="d-none" value="7" >
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('days')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror




                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Ads Banner Image <br><small class="text-primary">(*Image resolution max- width (1000px) & max- height (500px) ( allow only jpg , png ))</small></label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="image" type="file">
                                                        </div>
                                                        @error('image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="{{ asset($data->image) }}" alt="" class="img-fluid border rounded p-1" width="150">
                                                    </div>
                                                </div>


                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Submit for Review</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.dropify').dropify();
        $('.add_portfolio').click(function() {
            $(this).before('<input name="portfolio[]" accept="image/*" type="file" class="dropify"/>')
            $('.dropify').dropify();
        })

         $('.category_item').click(function(){
            $('.category_item').removeClass('active');
            $(this).addClass('active');
            var id = $(this).attr('id');


        })
    </script>
@endsection
