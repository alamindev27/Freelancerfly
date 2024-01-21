<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Job;
use App\Models\Proof;
use App\Models\ProofType;
use App\Models\Prove;
use App\Models\Region;
use App\Models\Step;
use App\Models\SubCategory;
use App\Models\SubmitJob;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ClientJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::where('user_id', auth()->user()->id)->get();
        return view('client.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $regions = Region::all();
        return view('client.job.create', compact('categories', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'region_id' => 'required',
            // 'country_id' => 'required',
            'title' => 'required | string | max:255',
            'thumbnail' => 'image | mimes:jpg,png,jpeg',
            'user_level' => 'required | string | max:255',
            'each_worker_earn' => 'required',
            'total_worker_needed' => 'required',
            'estimated_approval_day' => 'required',
            'rate' => 'required | numeric',
        ]);

        $steps = $request->step;
        $proofs = $request->proof;
        $proof_types = $request->proof_type;

        $file = $request->file('thumbnail');
        $fileName = time().'-thumbnail-1.'.$file->getClientOriginalExtension();
        $path = 'assets/uploads/';
        $request->thumbnail->move($path, $fileName);

        $estimate_job_cost = $request->each_worker_earn*$request->total_worker_needed;
        $commision_amount = ($estimate_job_cost*1)/100;
        $proof_price = $request->proof_price;
        $total_cost = $request->featured_price + $estimate_job_cost + $commision_amount + $proof_price + $request->rate;

        if (auth()->user()->main_balance < $total_cost) {
            return back()->with('error', 'You dont have enough main balance.');
        }

        $jobId = Job::insertGetId([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'region_id' => $request->region_id,
            'country_id' => 1,
            'title' => $request->title,
            'thumbnail' => $path.$fileName,
            'description' => $request->description,
            'user_level' => $request->user_level,
            'each_worker_earn' => $request->each_worker_earn,
            'total_worker_needed' => $request->total_worker_needed,
            'total_cost' => $total_cost,
            'estimated_approval_day' => $request->estimated_approval_day,
            'feature' => $request->feature,
            'steps' => json_encode($steps),
            'proofs' => json_encode($proofs),
            'proof_types' => json_encode($proof_types),
            'created_at' => Carbon::now()
        ]);
        $proofs = $request->proofs;
        $proofs_type = $request->proofs_type;

        for($count = 0; $count < count($proofs); $count++){
            $data = array(
                'job_id' => $jobId,
                'proof' => $proofs[$count],
                'proof_type'  => $proofs_type[$count],
                'created_at'  => Carbon::now(),
              );
              $insert_schedule[] = $data;
        }
        Prove::insert($insert_schedule);


        $user = User::where('id', auth()->user()->id)->first();
        $user->decrement('main_balance', $total_cost);
        return back()->with('success', 'Job post successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::where('id', Crypt::decrypt($id))->first();
        $submits = SubmitJob::where([['job_id', $job->id], ['client_id', auth()->user()->id]])->get();
        return view('client.job.show', compact('job', 'submits'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Job::where('id', Crypt::decrypt($id))->first();
        $categories = Category::all();
        return view('client.job.edit', compact('data', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Job::where([['id', Crypt::decrypt($id)], ['user_id', auth()->user()->id]])->first();

        $request->validate([
            'category_id' => 'required',
            'title' => 'required | string | max:255',
            'thumbnail' => 'image | mimes:jpg,png,jpeg',
            'user_level' => 'required | string | max:255',
            'each_worker_earn' => 'required',
            'total_worker_needed' => 'required',
            'estimated_approval_day' => 'required',
        ]);
        $steps = $request->step;
        $proofs = $request->proof;
        $proof_types = $request->proof_type;

        if ($request->hasFile('thumbnail')) {
            unlink(base_path($data->thumbnail));
            $file = $request->file('thumbnail');
            $fileName = time().'-thumbnail-1.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->thumbnail->move($path, $fileName);
            $data->update([
                'thumbnail' => $path.$fileName,
            ]);
        }


        $estimate_job_cost = $request->each_worker_earn*$request->total_worker_needed;
        $commision_amount = ($estimate_job_cost*1)/100;
        $proof_price = $request->proof_price;
        $total_cost = $request->featured_price + $estimate_job_cost + $commision_amount + $proof_price;

        $data->update([
            'category_id' => $request->category_id,
            'title' => $request->title,

            'description' => $request->description,
            'user_level' => $request->user_level,
            'each_worker_earn' => $request->each_worker_earn,
            'total_worker_needed' => $request->total_worker_needed,
            'total_cost' => $total_cost,
            'estimated_approval_day' => $request->estimated_approval_day,
            'feature' => $request->feature,
            'steps' => json_encode($steps),
            'proofs' => json_encode($proofs),
            'proof_types' => json_encode($proof_types),
            'status' => 'pending'
        ]);

        return back()->with('success', 'Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Job::where('id', Crypt::decrypt($id))->first();
        unlink(base_path($data->thumbnail));
        $data->delete();
        return back()->with('successfull', 'Deleted Successfully');
    }

    public function getSubcategory(Request $request) {
        $subCategries = SubCategory::where('category_id', $request->id)->get();
        return view('client.get-subcategories', compact('subCategries'));
    }

    public function getCountry(Request $request){
        $request->validate([
            'regionId' => 'required'
        ]);

        $countries = Country::where('region_id', $request->regionId)->get();
        return view('client.get-country', compact('countries'));
    }

    public function prove($id) {
        $id = Crypt::decrypt($id);
        $proves = SubmitJob::with('submitJobWithUserRelation')->where([['job_id', $id], ['client_id', auth()->user()->id]])->get();
        return view('client.job.proves', compact('proves'));
    }

    public function jobSubmitApproved($id) {
        $submitJob = SubmitJob::where([['id', $id], ['status', 'pending']])->first();
        $submitJob->update([
            'status' => 'success'
        ]);

        $job = Job::where('id', $submitJob->job_id)->first();
        $user = User::where('id', $submitJob->worker_id)->first();
        $user->increment('earning_balance', $job->each_worker_earn);

        return back()->with('success', 'Updated Successfully');
    }
}
