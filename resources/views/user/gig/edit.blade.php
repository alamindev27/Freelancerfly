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
    </style>
@endsection
@section('content')
    <div class="page-wraper" style="transform: none;">
        <div class="page-content" style="transform: none;">
            <div class="section-full p-t70  p-b70 site-bg-white" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row" style="transform: none;">

                        @include('partials.profile-sidebar')

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30" style="transform: none;">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="twm-right-section-panel site-bg-gray" style="transform: none;">
                                <div class="panel panel-default" style="transform: none;">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">
                                        <svg style="width: 20px" class="svg-inline--fa fa-suitcase me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="suitcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z">
                                            </path>
                                        </svg><!-- <i class="fa fa-suitcase me-2"></i> Font Awesome fontawesome.com -->Edi Gig</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 " style="transform: none;">
                                        <form action="{{ route('gig.update', Crypt::encrypt($gig->id)) }}" method="POST" enctype="multipart/form-data" style="transform: none;">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row" style="transform: none;">

                                                <div class="col-12">
                                                    <div class="form-group mb-4 text-center">
                                                        <h4 class="ms-0 mb-2">Gig Banner <small class="text-danger">(300 x 150)</small></h4>
                                                        <div class="col-xl-12" id="bannerInput">
                                                            @foreach ($banners as $banner)
                                                                <div class="form-group">
                                                                    <input class="form-control" style="height: auto !important; padding:10px" name="banners[]" type="file">
                                                                    <img src="{{ asset($banner->banner) }}" alt="{{ $gig->title }}" width="150" class="img-fluid m-2 bounded border p-1">
                                                                    @if ($loop->index != 0)
                                                                        <a href="javascript:viod(0)" onclick="removeImgItem(this)" class="text-danger text-decoration-none d-block text-center">Remove</a>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <a class="btn btn-success" id="add_banner">
                                                            <svg style="width: 13px" class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z">
                                                                </path>
                                                            </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                                                            Add Banner
                                                        </a>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 col-md-12 rightSidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                                                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                                                        <div class="side-bar custom mb-4 dashboard-custom">
                                                            <h4 class="text-center choose-plan">Choose your plan</h4>
                                                            <ul class="nav nav-tabs project-tab justify-content-center"
                                                                id="project-tab" role="tablist">
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#basic-gigs" type="button" role="tab" aria-controls="home" aria-selected="false">Basic</button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#standard-gigs" type="button" role="tab" aria-controls="profile" aria-selected="false">Standard</button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#premium-gigs" type="button" role="tab" aria-controls="contact" aria-selected="true">Premium</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="gigs-package">
                                                            <div class="tab-content" id="myTab3Content">
                                                                <div class="tab-pane fade active show" id="basic-gigs" role="tabpanel" aria-labelledby="Monthly">
                                                                    <div class="gig-wrapper">
                                                                        <div class="top-gig-content d-flex justify-content-between align-items-center custom">
                                                                            <div class="revision_wrapper position-relative">
                                                                                <input class="form-control custom-form-control " name="basic_package_name" value="{{ $gig->basic_package_name }}" type="text" placeholder="Basic Package Name">
                                                                                @error('basic_package_name')
                                                                                    <span class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="revision_wrapper position-relative">
                                                                                <input class="form-control custom-form-control " name="basic_price" value="{{ $gig->basic_price }}" min="1" type="number" placeholder="Basic Service Price">
                                                                                <span class="custom-input-text">$</span>
                                                                                @error('basic_price')
                                                                                    <span class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="gig-main-content">
                                                                            <div class="top-gig-content d-flex justify-content-between align-items-center custom mt-2">
                                                                                <div class="revision_wrapper position-relative">
                                                                                    <input class="form-control custom-form-control " name="basic_delivery_time" value="{{ $gig->basic_delivery_time }}" type="number" placeholder="Basic Delivery Time">
                                                                                    <span class="custom-input-text">Days</span>
                                                                                    @error('basic_delivery_time')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex align-items-center revision_wrapper position-relative">
                                                                                    <div class="unlimited_input_box me-2">
                                                                                        <input type="checkbox" {{ $gig->basic_unlimited_revision == 'yes' ? 'checked' : '' }} onchange="setBasicRevision()" name="basic_unlimited_revision" value="yes" id="basic_unlimited_revision">
                                                                                        <label for="basic_unlimited_revision"> Unlimited Revision</label>
                                                                                    </div>
                                                                                    <input class="form-control custom-form-control {{ $gig->basic_unlimited_revision == 'yes' ? 'd-none' : '' }}" name="basic_total_revision" id="basic_total_revision" value="{{ $gig->basic_total_revision }}" type="number" placeholder="Basic Total Revision">
                                                                                    <span class="custom-input-text {{ $gig->basic_unlimited_revision == 'yes' ? 'd-none' : '' }}" id="basic_total_revision_text">Days</span>
                                                                                    @error('basic_total_revision')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="gig-main-content">
                                                                            <label for="">Basic features </label>
                                                                            @foreach ($basicFeatures as $f1)
                                                                                <input class="form-control custom-form-control mb-3" style="width:100%" name="basic_feature[]" value="{{ $f1->feature }}" required type="text" placeholder="Enter Basic Feature" {{ $loop->index == 0 ? 'required' : '' }}>
                                                                            @endforeach


                                                                            <a class="btn btn-success text-center" id="add_basic_feature">
                                                                                <svg style="width: 13px" class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z">
                                                                                    </path>
                                                                                </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                                                                                Add basic feature
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                                <div class="tab-pane fade" id="standard-gigs" role="tabpanel" aria-labelledby="Monthly">
                                                                    <div class="gig-wrapper position-relative">
                                                                        <div class="top-gig-content d-flex justify-content-between align-items-center custom">
                                                                            <div class="revision_wrapper position-relative">
                                                                                <input class="form-control custom-form-control " name="standard_package_name" value="{{ $gig->standard_package_name }}" type="text" placeholder=" Standard Package Name">
                                                                            @error('standard_package_name')
                                                                                <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                            </div>
                                                                            <div class="revision_wrapper position-relative">
                                                                                <input class="form-control custom-form-control " name="standard_price" type="number" value="{{ $gig->standard_price }}" min="1" placeholder="Standard Service Price">
                                                                                <span class="custom-input-text">$</span>
                                                                            @error('standard_price')
                                                                                <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                            </div>

                                                                        </div>
                                                                        <div class="gig-main-content">

                                                                            <div class="top-gig-content d-flex justify-content-between align-items-center custom mt-2">
                                                                                <div class="revision_wrapper position-relative">
                                                                                    <input class="form-control custom-form-control no_number_btn " name="standard_delivery_time" value="{{ $gig->standard_delivery_time }}" type="number" placeholder="Standard Delivery Time">
                                                                                    <span class="custom-input-text">Days</span>
                                                                                    @error('standard_delivery_time')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>

                                                                                <div class="d-flex align-items-center revision_wrapper position-relative">
                                                                                    <div class="unlimited_input_box me-2">
                                                                                        <input type="checkbox" onchange="setStandardRevision()" name="standard_unlimited_revision" {{ $gig->standard_unlimited_revision == 'yes' ? 'checked' : '' }} value="yes" id="standard_unlimited_revision">
                                                                                        <label for="standard_unlimited_revision">Unlimited Revision</span>
                                                                                    </div>
                                                                                    <input class="form-control custom-form-control {{ $gig->standard_unlimited_revision == 'yes' ? 'd-none' : '' }}" name="standard_total_revision" id="standard_total_revision" value="{{ $gig->standard_total_revision }}" type="number" placeholder="Standard Total Revision">
                                                                                    <span class="custom-input-text{{ $gig->standard_unlimited_revision == 'yes' ? 'd-none' : '' }}" id="standard_unlimited_revision_text">Days</span>
                                                                                    @error('standard_total_revision')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div class="gig-main-content">
                                                                            <label for="">Standard features </label>
                                                                            @foreach ($standardFeatures as $f2)
                                                                                <input class="form-control custom-form-control mb-3" style="width:100%" name="standard_feature[]" required value="{{ $f2->feature }}" type="text" placeholder="Enter  Standard Feature" {{ $loop->index == 0 ? 'required' : "" }}>
                                                                            @endforeach

                                                                            <a class="btn btn-success" id="add_standard_feature">
                                                                                <svg style="width: 13px" class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z">
                                                                                    </path>
                                                                                </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                                                                                Add standard feature
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>





                                                                <div class="tab-pane fade" id="premium-gigs" role="tabpanel" aria-labelledby="Monthly">
                                                                    <div class="gig-wrapper">
                                                                        <div class="top-gig-content d-flex justify-content-between align-items-center custom">
                                                                            <div class="revision_wrapper position-relative">
                                                                                <input class="form-control custom-form-control " name="premium_package_name" value="{{ $gig->premium_package_name }}" type="text" placeholder="Premium Package Name">
                                                                                @error('premium_package_name')
                                                                                    <span class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="revision_wrapper position-relative">
                                                                                <input class="form-control custom-form-control no_number_btn " name="premium_price" value="{{ $gig->premium_price }}" min="1" type="number" placeholder="Premium Serivice Price">
                                                                                <span class="custom-input-text">$</span>
                                                                                @error('premium_price')
                                                                                    <span class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="gig-main-content">

                                                                            <div class="top-gig-content d-flex justify-content-between align-items-center custom mt-2">
                                                                                <div class="revision_wrapper position-relative">
                                                                                    <input class="form-control custom-form-control no_number_btn " name="premium_delivery_time" value="{{ $gig->premium_delivery_time }}" type="number" placeholder="Premium Delivery Time">
                                                                                    <span class="custom-input-text">Days</span>
                                                                                    @error('premium_delivery_time')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>

                                                                                <div class="d-flex align-items-center revision_wrapper position-relative">
                                                                                    <div class="unlimited_input_box me-2">
                                                                                        <input type="checkbox" value="yes" onchange="setPremiumRevision()" {{ $gig->premium_unlimited_revision == 'yes' ? 'checked' : '' }} name="premium_unlimited_revision" id="premium_unlimited_revision">
                                                                                        <label for="premium_unlimited_revision">Unlimited Revision</label>
                                                                                    </div>

                                                                                    <input class="form-control {{ $gig->premium_unlimited_revision == 'yes' ? 'd-none' : '' }} custom-form-control no_number_btn " name="premium_total_revision" id="premium_total_revision" value="{{ $gig->premium_total_revision }}" type="number" placeholder="Premium Total Revision">
                                                                                    <span class="custom-input-text {{ $gig->premium_unlimited_revision == 'yes' ? 'd-none' : '' }}" id="premium_total_revision_text">Days</span>
                                                                                    @error('premium_total_revision')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="gig-main-content">
                                                                            <label for="">Premium features </label>
                                                                            @foreach ($premiumFeatures as $f3)
                                                                                <input class="form-control custom-form-control mb-3" style="width:100%" name="premium_feature[]" required value="{{ $f3->feature }}" type="text" placeholder="Enter Premium Feature" {{ $loop->index == 0 ? 'required' : "" }}>
                                                                            @endforeach

                                                                            <a class="btn btn-success" id="add_premium_feature">
                                                                                <svg style="width: 13px" class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z">
                                                                                    </path>
                                                                                </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                                                                                Add premium feature</a>
                                                                        </div>

                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class=" col-md-12">
                                                        <div class="form-group mb-2">
                                                            <label class="ms-3 mb-2">Gig Title</label>
                                                            <input value="I will " class="form-control custom-form-control-2 " name="title" type="text" placeholder="Gig Title" value="{{ $gig->title }}" required>
                                                            @error('title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-12">
                                                        <div class="form-group custom-textarea mb-3">
                                                            <label class="mb-2">Gig Description</label>
                                                            <textarea class="form-control " name="description" rows="3" placeholder="Gig Description Here.....">{{ $gig->description }}</textarea>
                                                            @error('description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-12">
                                                        <div class="form-group custom-textarea mb-3">
                                                            <label class="mb-2">Gig Related Tags</label>
                                                            <textarea class="form-control " name="tags" rows="3" placeholder="Gig Tags in a comma-separated(,)">{{ $gig->tags }}</textarea>
                                                            @error('tags')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 mt-3">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button m-r5">Request for Review</button>
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
        $('#add_banner').click(function(){
            $(this).before(`
                <div class="form-group">
                    <input class="form-control" style="height: auto !important; padding:10px" name="banners[]" type="file" accept="image/*">
                    <a href="javascript:viod(0)" onclick="removeImgItem(this)" class="text-danger text-decoration-none d-block text-center">Remove</a>
                </div>

            `);
        });

        $('#add_basic_feature').click(function(){
            $(this).before(`<input class="form-control custom-form-control mb-3" style="width:100%" name="basic_feature[]" value="" type="text" placeholder="Enter Basic Feature">`);
        });
        $('#add_standard_feature').click(function(){
            $(this).before(`<input class="form-control custom-form-control mb-3" style="width:100%" name="standard_feature[]" value="" type="text" placeholder="Enter Standard Feature">`);
        });
        $('#add_premium_feature').click(function(){
            $(this).before(`<input class="form-control custom-form-control mb-3" style="width:100%" name="premium_feature[]" value="" type="text" placeholder="Enter Premium Feature">`);
        });

        function setBasicRevision(){
            if ( $('#basic_unlimited_revision').prop("checked") == true ) {
                $('#basic_total_revision').addClass('d-none');
                $('#basic_total_revision').removeClass('d-block');
                $('#basic_total_revision_text').addClass('d-none');
                $('#basic_total_revision_text').removeClass('d-block');
            }else if( $('#basic_unlimited_revision').prop("checked") == false ) {
                $('#basic_total_revision').addClass('d-block');
                $('#basic_total_revision').removeClass('d-none');
                $('#basic_total_revision_text').addClass('d-block');
                $('#basic_total_revision_text').removeClass('d-none');
            }
        }

        function setStandardRevision(){
            if ( $('#standard_unlimited_revision').prop("checked") == true ) {
                $('#standard_total_revision').addClass('d-none');
                $('#standard_total_revision').removeClass('d-block');
                $('#standard_unlimited_revision_text').addClass('d-none');
                $('#standard_unlimited_revision_text').removeClass('d-block');
            }else if( $('#standard_unlimited_revision').prop("checked") == false ) {
                $('#standard_total_revision').addClass('d-block');
                $('#standard_total_revision').removeClass('d-none');
                $('#standard_unlimited_revision_text').addClass('d-block');
                $('#standard_unlimited_revision_text').removeClass('d-none');
            }
        }

        function setPremiumRevision(){
            if ( $('#premium_unlimited_revision').prop("checked") == true ) {
                $('#premium_total_revision').addClass('d-none');
                $('#premium_total_revision').removeClass('d-block');
                $('#premium_total_revision_text').addClass('d-none');
                $('#premium_total_revision_text').removeClass('d-block');
            }else if( $('#premium_unlimited_revision').prop("checked") == false ) {
                $('#premium_total_revision').addClass('d-block');
                $('#premium_total_revision').removeClass('d-none');
                $('#premium_total_revision_text').addClass('d-block');
                $('#premium_total_revision_text').removeClass('d-none');
            }
        }

        function removeImgItem(button){
            $(button).parent().remove();
        }

    </script>
@endsection
