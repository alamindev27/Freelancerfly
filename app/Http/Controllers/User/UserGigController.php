<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BasicFeature;
use App\Models\Gig;
use App\Models\GigBanner;
use App\Models\PremiumFeature;
use App\Models\StandardFeature;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserGigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Gig::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('user.gig.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.gig.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banners' => 'array | min:1',
            'basic_feature' => 'array | min:1',
            'standard_feature' => 'array | min:1',
            'premium_feature' => 'array | min:1',

            'banners.*' => 'required | image | mimes:jpg,png,jpeg',

            'basic_package_name' => 'required | string | max:255',
            'basic_price' => 'required | numeric | min:1',
            'basic_delivery_time' => 'required | numeric | min:1',
            'basic_unlimited_revision' => 'required_without:basic_total_revision',
            'basic_total_revision' => 'required_without:basic_unlimited_revision',
            'basic_feature.*' => 'required',

            'standard_package_name' => 'required | string | max:255',
            'standard_price' => 'required | numeric | min:1',
            'standard_delivery_time' => 'required | numeric | min:1',
            'standard_unlimited_revision' => 'required_without:standard_total_revision',
            'standard_total_revision' => 'required_without:standard_unlimited_revision',
            'standard_feature' => 'required',

            'premium_package_name' => 'required | string | max:255',
            'premium_price' => 'required | numeric | min:1',
            'premium_delivery_time' => 'required | numeric | min:1',
            'premium_unlimited_revision' => 'required_without:premium_total_revision',
            'premium_total_revision' => 'required_without:premium_unlimited_revision',
            'premium_feature' => 'required',

            'title' => 'required | string | max:255',
            'description' => 'required',
            'tags' => 'required | string | max:255',
        ]);

        $gig = Gig::orderBy('id', 'DESC')->first();
        $gigId = 4000;
        if ($gig) {
            $gigId = $gig->gigId + 1;
        }else{
            $gigId = 4000;
        }

        $gigId = Gig::insertGetId([
            'gigId' => $gigId,
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'basic_package_name' => $request->basic_package_name,
            'basic_price' => $request->basic_price,
            'basic_delivery_time' => $request->basic_delivery_time,

            'basic_unlimited_revision' => $request->basic_unlimited_revision,
            'basic_total_revision' => $request->basic_total_revision,

            'standard_package_name' => $request->standard_package_name,
            'standard_price' => $request->standard_price,
            'standard_delivery_time' => $request->standard_delivery_time,
            'standard_unlimited_revision' => $request->standard_unlimited_revision,
            'standard_total_revision' => $request->standard_total_revision,
            'premium_package_name' => $request->premium_package_name,
            'premium_price' => $request->premium_price,
            'premium_delivery_time' => $request->premium_delivery_time,
            'premium_unlimited_revision' => $request->premium_unlimited_revision,
            'premium_total_revision' => $request->premium_total_revision,
            'created_at' => Carbon::now()
        ]);

        $banners = $request->banners;
        foreach ($banners as $key => $singleImage) {
            $fileName = rand().time().'-banner.'.$singleImage->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $singleImage->move($path, $fileName);

            GigBanner::insert([
                'gig_id' => $gigId,
                'banner' => $path.$fileName,
                'created_at' => Carbon::now()
            ]);
        }
        $basicFeatures = $request->basic_feature;
        foreach ($basicFeatures as $key => $feature) {
            BasicFeature::insert([
                'gig_id' => $gigId,
                'feature' => $feature,
                'created_at' => Carbon::now()
            ]);
        }
        $standardFeatures = $request->standard_feature;
        foreach ($standardFeatures as $key => $feature) {
            StandardFeature::insert([
                'gig_id' => $gigId,
                'feature' => $feature,
                'created_at' => Carbon::now()
            ]);
        }
        $premiumFeatures = $request->premium_feature;
        foreach ($premiumFeatures as $key => $feature) {
            PremiumFeature::insert([
                'gig_id' => $gigId,
                'feature' => $feature,
                'created_at' => Carbon::now()
            ]);
        }
        return redirect()->route('gig.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gigId = Crypt::decrypt($id);
        $gig = Gig::where([['user_id', auth()->user()->id], ['id', $gigId]])->first();
        $banners = GigBanner::where('gig_id', $gigId)->get();
        $basicFeatures = BasicFeature::where('gig_id', $gigId)->get();
        $standardFeatures = StandardFeature::where('gig_id', $gigId)->get();
        $premiumFeatures = PremiumFeature::where('gig_id', $gigId)->get();
        return view('user.gig.edit', compact('gig', 'banners', 'basicFeatures', 'standardFeatures', 'premiumFeatures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);

        $request->validate ([
            'banners' => 'array',
            'basic_feature' => 'array | min:1',
            'standard_feature' => 'array | min:1',
            'premium_feature' => 'array | min:1',

            'banners.*' => 'image | mimes:jpg,png,jpeg',

            'basic_package_name' => 'required | string | max:255',
            'basic_price' => 'required | numeric | min:1',
            'basic_delivery_time' => 'required | numeric | min:1',
            'basic_unlimited_revision' => 'required_without:basic_total_revision',
            'basic_total_revision' => 'required_without:basic_unlimited_revision',
            'basic_feature.*' => 'required',

            'standard_package_name' => 'required | string | max:255',
            'standard_price' => 'required | numeric | min:1',
            'standard_delivery_time' => 'required | numeric | min:1',
            'standard_unlimited_revision' => 'required_without:standard_total_revision',
            'standard_total_revision' => 'required_without:standard_unlimited_revision',
            'standard_feature' => 'required',

            'premium_package_name' => 'required | string | max:255',
            'premium_price' => 'required | numeric | min:1',
            'premium_delivery_time' => 'required | numeric | min:1',
            'premium_unlimited_revision' => 'required_without:premium_total_revision',
            'premium_total_revision' => 'required_without:premium_unlimited_revision',
            'premium_feature' => 'required',

            'title' => 'required | string | max:255',
            'description' => 'required',
            'tags' => 'required | string | max:255',
        ]);

        $gig = Gig::where([['user_id', auth()->user()->id], ['id', $id]])->first();

        $gig->update([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'basic_package_name' => $request->basic_package_name,
            'basic_price' => $request->basic_price,
            'basic_delivery_time' => $request->basic_delivery_time,
            'basic_unlimited_revision' => $request->basic_unlimited_revision,
            'basic_total_revision' => $request->basic_total_revision,
            'standard_package_name' => $request->standard_package_name,
            'standard_price' => $request->standard_price,
            'standard_delivery_time' => $request->standard_delivery_time,
            'standard_unlimited_revision' => $request->standard_unlimited_revision,
            'standard_total_revision' => $request->standard_total_revision,
            'premium_package_name' => $request->premium_package_name,
            'premium_price' => $request->premium_price,
            'premium_delivery_time' => $request->premium_delivery_time,
            'premium_unlimited_revision' => $request->premium_unlimited_revision,
            'premium_total_revision' => $request->premium_total_revision,
            'status' => 'pending'
        ]);

        if ($request->hasFile('banners')) {
            $gigBanners = GigBanner::where('gig_id', $gig->id)->get();
            foreach ($gigBanners as $key => $banner) {
                unlink(base_path($banner->banner));
                $banner->delete();
            }

            $banners = $request->banners;
            foreach ($banners as $key => $singleImage) {
                $fileName = rand().time().'-banner.'.$singleImage->getClientOriginalExtension();
                $path = 'assets/uploads/';
                $singleImage->move($path, $fileName);

                GigBanner::insert([
                    'gig_id' => $gig->id,
                    'banner' => $path.$fileName,
                    'created_at' => Carbon::now()
                ]);
            }
        }




        BasicFeature::where('gig_id', $gig->id)->delete();
        $basicFeatures = $request->basic_feature;
        foreach ($basicFeatures as $key => $feature) {
            BasicFeature::insert([
                'gig_id' => $gig->id,
                'feature' => $feature,
                'created_at' => Carbon::now()
            ]);
        }

        StandardFeature::where('gig_id', $gig->id)->delete();
        $standardFeatures = $request->standard_feature;
        foreach ($standardFeatures as $key => $feature) {
            StandardFeature::insert([
                'gig_id' => $gig->id,
                'feature' => $feature,
                'created_at' => Carbon::now()
            ]);
        }

        PremiumFeature::where('gig_id', $gig->id)->delete();
        $premiumFeatures = $request->premium_feature;
        foreach ($premiumFeatures as $key => $feature) {
            PremiumFeature::insert([
                'gig_id' => $gig->id,
                'feature' => $feature,
                'created_at' => Carbon::now()
            ]);
        }
        return redirect()->route('gig.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    public function pending()
    {

        $datas = Gig::where([['user_id', auth()->user()->id], ['status', 'pending']])->orderBy('created_at', 'DESC')->get();
        return view('user.gig.index', compact('datas'));
    }



    public function active()
    {

        $datas = Gig::where([['user_id', auth()->user()->id], ['status', 'success']])->orderBy('created_at', 'DESC')->get();
        return view('user.gig.index', compact('datas'));
    }



    public function rejected()
    {

        $datas = Gig::where([['user_id', auth()->user()->id], ['status', 'rejected']])->orderBy('created_at', 'DESC')->get();
        return view('user.gig.index', compact('datas'));
    }

    public function gigDetails($id) {
        $gigId = Crypt::decrypt($id);
        $data = Gig::where([['user_id', auth()->user()->id], ['id', $gigId]])->first();
        return view('user.gig.details', compact('data'));
    }


}
