<div class="col-12">
    <div class="micro-job-wrapper d-flex justify-content-between flex-wrap align-items-center">
        <div class="micro-left-content two">
            <div class="m-tag-wrap">
                {{-- <a href="#"><span class="m-featured">FEATURED</span></a> --}}
                <a href="#"><span>{{ $job->jobWithCategoryRelation->category_name }}</span></a>
            </div>
            <a href="{{ route('user.job.details', $job->id) }}" class="m-link">
                <h5 class="m-title">{{$job->title}}</h5>
            </a>
            <div class="m-expertise-wrap d-flex ">
                {{-- <p><span class="m-icon"><i class="fa-solid fa-globe"></i></span><span class="m-country">Worldwide Countries</span></p> <p> --}}
                    <span class="m-icon"><i class="fa-solid fa-explosion"></i></span><span
                        class="m-expertise">
                        Level {{ $job->user_level }}
                    </span>
                </p>
            </div>
        </div>
        <div class="micro-middle-content two">
            <div class="progress-wrapper">

                <div class="progress-counter text-center">
                    <p class="mb-0"><span>{{ submitedJob($job->id) > 0 ? submitedJob($job->id) : 0 }}</span> of <span>{{ $job->total_worker_needed }}</span> done</p>
                </div>
                <div class="progress custom-progress">
                    <div class="progress-bar" style="width:{{ $job->total_worker_needed * submitedJob($job->id) / 100 }}%"></div>
                </div>
            </div>

        </div>
        <div class="micro-right-content two">
            <div class="m-action-wrap text-end">
                <span> <a href="{{ route('user.job.details', $job->id) }}" class="text-muted" target="blank"><i class="fa-solid fa-up-right-from-square"></i></a></span>
            </div>
            <div class="m-price-wrap text-end">
                <p>$ {{ $job->each_worker_earn }}</p>
            </div>
            <div class="m-duration text-end">
            </div>
        </div>
    </div>
</div>
