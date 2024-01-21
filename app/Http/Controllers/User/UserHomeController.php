<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Skill;
use App\Models\SubmitJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserHomeController extends Controller
{
    public function groupJobs() {
        $jobs = Job::with('jobWithCategoryRelation')->where([['status', 'success'], ['user_id', '!=', auth()->user()->id]])->paginate(20);
        return view('user.group-jobs', compact('jobs'));
    }
    public function jobDetails($id) {
        if (auth()->user()->verify_status == 'unverified') {
            return redirect()->route('user.verify.profile');
        }
        $job = Job::with('jobWithCategoryRelation')->where([['id', $id], ['status', 'success']])->first();
        $jobSubmit = SubmitJob::where([['worker_id', auth()->user()->id], ['job_id', $job->id]])->exists();
        return view('user.job-details', compact('job', 'jobSubmit'));
    }

    public function verify() {
        return view('user.verify');
    }

    public function verifySubmit(Request $request) {
        $user = User::where('id', auth()->user()->id)->first();
        if ($user->main_balance < 2) {
            return back()->with('error', 'Please Deposit main balance');
        }
        $user->update([
            'verify_status' => 'verified'
        ]);
        $user->decrement('main_balance', 2);

        return redirect()->route('both.index')->with('success', 'Account Verification Successfully');
    }

    public function index() {
        $tasks = SubmitJob::with('submitJobWithUserRelation', 'submitJobWithJobRelation')->where('worker_id', auth()->user()->id)->get();
        return view('user.task.index', compact('tasks'));
    }
}
