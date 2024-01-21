<div class="col-lg-4 col-md-12 m-b10 ">
    <div class="gigs-wrapper">
        <div class="gigs-image">
            <div id="demo-{{ $key }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" data-bs-pause="hover">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo-{{ $key }}" data-bs-slide-to="0" class="{{ $key == 0 ? 'active' : '' }}"></button>
                </div>


                <div class="carousel-inner">
                    @foreach (banners($gig->id) as $key2 => $banner)
                        <div class="carousel-item {{ $key2 == 0 ? 'active' : '' }}">
                            <img src="{{ asset($banner->banner) }}" alt="Los Angeles" class="d-block" style="width:100%">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo-{{ $key }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#demo-{{ $key }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

        </div>
        <div class="gigs-content">
            <a href="{{ route('both.gig.details', $gig->id) }}" class="twm-job-title">
                <h4>{{ $gig->title }}</h4>
            </a>
            {{-- <div class="gigs-rating-wrap">
                <p>
                    <span class="rating-icon me-1">
                        <i class="fa fa-star"></i>
                    </span>
                    <span class="rating-averge">4.7</span>
                    <span class="total-rating">(11)</span>
                </p>
            </div> --}}
        </div>
        <div class="gigs-footer d-flex justify-content-between align-items-center">
            <div class="gigs-content-left">
            </div>
            <div class="gigs-content-right">
                <span><small>STARTING AT</small> $ {{ $gig->basic_price }}</span>
            </div>
        </div>
    </div>
</div>
