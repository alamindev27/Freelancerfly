<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Gig;
use App\Models\Job;
use App\Models\JobSubmitProof;
use App\Models\JobSubmitProofImage;
use App\Models\Page;
use App\Models\PaymentGetway;
use App\Models\ResponsibilityAndStep;
use App\Models\SubmitJob;
use App\Models\Testimonial;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $getways = PaymentGetway::orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::all();
        $about = About::where('id', 1)->first();
        $banner = Banner::where('id', 1)->first();
        $step = ResponsibilityAndStep::where('id', 1)->first();
        $jobs = Job::with('jobWithCategoryRelation')->where('status', 'success')->latest()->limit(10)->get();
        $gigs = Gig::where('status', 'success')->orderBy('created_at', 'DESC')->limit(6)->get();
        $cagtegories = Category::all();
        return view('welcome', compact('getways', 'testimonials', 'about', 'banner', 'step', 'jobs', 'gigs', 'cagtegories'));
    }

    public function about() {
        $cagtegories = Category::orderBy('id', 'DESC')->limit(8)->get();
        return view('about', compact('cagtegories'));
    }

    public function categories() {
        $cagtegories = Category::orderBy('id', 'DESC')->paginate(12);
        return view('cagtegories', compact('cagtegories'));
    }


    public function changeRole() {
        $user = User::where('id', auth()->user()->id)->first();
        if (auth()->user()->role == 'client') {
            $user->update([
                'role' => 'user'
            ]);
            return redirect()->route('client.index')->with('success', 'You are now in Worker mode.');
        }else{
            $user->update([
                'role' => 'client'
            ]);
            return redirect()->route('client.index')->with('success', 'You are now in Buyer mode.');
        }
    }

    public function privacyPolicy() {
        $data = Page::where('id', 2)->first();
        return view('privacyPolicy',compact('data'));
    }

    public function tramsAndCondition() {
        $data = Page::where('id', 1)->first();
        return view('privacyPolicy',compact('data'));
    }

    public function refundPolicy() {
        $data = Page::where('id', 3)->first();
        return view('privacyPolicy',compact('data'));
    }

    public function support() {
        $data = Page::where('id', 4)->first();
        return view('privacyPolicy',compact('data'));
    }

    public function submitJob(Request $request, $id) {
        $job = Job::where('id', $id)->first();
        if ($job) {
            $submitId = SubmitJob::insertGetId([
                'worker_id' => auth()->user()->id,
                'client_id' => $job->user_id,
                'job_id' => $id,
                'note' => $request->note,
                'created_at' => Carbon::now()
            ]);

            $proofs = $request->proof_text;
            if ($proofs) {
                foreach ($proofs as $key => $data) {
                    JobSubmitProof::insert([
                        'submit_job_id' => $submitId,
                        'proof' => $data,
                        'created_at' => Carbon::now()
                    ]);
                }
            }

            $images = $request->proof_image;
            foreach ($images as $key => $singleImage) {
                $file = $request->file('proof_image');
                $fileName = time().'-proof.'.$singleImage->getClientOriginalExtension();
                $path = 'assets/uploads/';
                $singleImage->move($path, $fileName);

                JobSubmitProofImage::insert([
                    'submit_job_id' => $submitId,
                    'image' => $path.$fileName,
                    'created_at' => Carbon::now()
                ]);
            }
            return back()->with('success', 'Submited Successfully');
        }
    }

    public function search() {
        $job_type = $_GET['job_type'];
        $category = $_GET['category'];
        $keyword = $_GET['keyword'];
        if ($job_type == 'group_job') {
            $jobs = Job::with('jobWithCategoryRelation')->where('title', 'LIKE', "%$keyword%")
                        ->orWhere([['category_id', $category], ['status', 'success']])
                        ->orderBy('title')
                        ->get();
            return view('job-search', compact('jobs'));
        }else{
            $gigs = Gig::where('title', 'LIKE', "%$keyword%")
                        ->orWhere('tags', 'LIKE', "%$keyword%")
                        ->orWhere('basic_package_name', 'LIKE', "%$keyword%")
                        ->orWhere('standard_package_name', 'LIKE', "%$keyword%")
                        ->orWhere('premium_package_name', 'LIKE', "%$keyword%")
                        ->orWhere('status', 'success')
                        ->orderBy('title')
                        ->get();
            return view('gig-search', compact('jobs'));
        }
    }
}
