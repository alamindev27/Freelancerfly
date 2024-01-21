<?php

use App\Models\Advertisement;
use App\Models\BasicFeature;
use App\Models\GigBanner;
use App\Models\Job;
use App\Models\PremiumFeature;
use App\Models\Prove;
use App\Models\Setting;
use App\Models\Social;
use App\Models\StandardFeature;
use App\Models\SubmitJob;
use App\Models\User;

if (!function_exists('setting')) {
    function setting()
    {
        $setting = Setting::where('id', 1)->first();
        if ($setting) {
            return $setting;
        }else{
            return false;
        }
    }
}


if (!function_exists('jobCount')) {
    function jobCount()
    {
        $number = Job::where([['user_id', auth()->user()->id], ['status', 'success']])->count();
        if ($number > 0) {
            return $number;
        }else{
            return 0;
        }
    }
}
if (!function_exists('socials')) {
    function socials()
    {
        $socials = Social::all();
        if ($socials) {
            return $socials;
        }else{
            return false;
        }
    }
}
if (!function_exists('submitedJob')) {
    function submitedJob($jobId)
    {
        $socials = SubmitJob::where('job_id', $jobId)->count();
        if ($socials) {
            return $socials;
        }else{
            return false;
        }
    }
}
if (!function_exists('banners')) {
    function banners($gig)
    {
        $banners = GigBanner::where('gig_id', $gig)->get();
        if ($banners) {
            return $banners;
        }else{
            return false;
        }
    }
}
if (!function_exists('advertisements')) {
    function advertisements()
    {
        $advertisements = Advertisement::all();
        if ($advertisements) {
            return $advertisements;
        }else{
            return false;
        }
    }
}
if (!function_exists('BasicFeature')) {
    function BasicFeature($gigId)
    {
        $BasicFeature = BasicFeature::where('gig_id', $gigId)->get();
        if ($BasicFeature) {
            return $BasicFeature;
        }else{
            return false;
        }
    }
}
if (!function_exists('StandardFeature')) {
    function StandardFeature($gigId)
    {
        $StandardFeature = StandardFeature::where('gig_id', $gigId)->get();
        if ($StandardFeature) {
            return $StandardFeature;
        }else{
            return false;
        }
    }
}
if (!function_exists('PremiumFeature')) {
    function PremiumFeature($gigId)
    {
        $PremiumFeature = PremiumFeature::where('gig_id', $gigId)->get();
        if ($PremiumFeature) {
            return $PremiumFeature;
        }else{
            return false;
        }
    }
}
// if (!function_exists('gigBanner')) {
//     function gigBanner($gigId)
//     {
//         $gigBanner = PremiumFeature::where('gig_id', $gigId)->orderBy('id', 'ASC')->first();
//         if ($gigBanner) {
//             return $gigBanner;
//         }else{
//             return false;
//         }
//     }
// }

if (!function_exists('getProve')) {
    function getProve($jobId)
    {
        $proves = Prove::where('job_id', $jobId)->get();
        if ($proves) {
            return $proves;
        }else{
            return false;
        }
    }
}
if (!function_exists('getUser')) {
    function getUser($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            return $user;
        }else{
            return false;
        }
    }
}
