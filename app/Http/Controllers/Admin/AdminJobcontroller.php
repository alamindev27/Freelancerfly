<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class AdminJobcontroller extends Controller
{
    public function pending() {
        $jobs = Job::with('jobWithUserRelation')->where('status', 'pending')->orderBy('created_at', 'DESC')->get();
        return view('admin.job.pendig', compact('jobs'));
    }
    public function approved() {
        $jobs = Job::with('jobWithUserRelation')->where('status', 'success')->orderBy('created_at', 'DESC')->get();
        return view('admin.job.pendig', compact('jobs'));
    }
    public function rejected() {
        $jobs = Job::where('status', 'rejected')->orderBy('created_at', 'DESC')->get();
        return view('admin.job.pendig', compact('jobs'));
    }

    public function approvedStatus($id) {
        $job = Job::with('jobWithUserRelation')->where([['id', $id], ['status', 'pending']])->first();
        $job->update([
            'status' => 'success'
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function rejectedStatus($id) {
        $job = Job::where([['id', $id], ['status', 'pending']])->first();
        $job->update([
            'status' => 'rejected'
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function delete($id) {
        $job = Job::where([['id', $id], ['status', 'pending']])->first();
        $job->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
