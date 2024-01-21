<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas  = Plan::all();
        return view('admin.plan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plan_name' => 'required | string | max:255',
            'price' => 'required | numeric | min:1',
            'job_post_fee' => 'required | numeric | min:1 | max:100',
            'withdraw_fee' => 'required | numeric | min:1 | max:100',
            'post_bost_duration' => 'required | numeric | min:1',
            'daily_spin_limit' => 'required | numeric | min:1',
            'deposit_refer_commission' => 'required | numeric | min:1 | max:100',
            'task_commission' => 'required | numeric | min:1 | max:100',
        ]);

        Plan::insert([
            'plan_name' => $request->plan_name,
            'price' => $request->price,
            'job_post_fee' => $request->job_post_fee,
            'withdraw_fee' => $request->withdraw_fee,
            'post_bost_duration' => $request->post_bost_duration,
            'daily_spin_limit' => $request->daily_spin_limit,
            'deposit_refer_commission' => $request->deposit_refer_commission,
            'task_commission' => $request->task_commission,
            'geen_mark_badge' => $request->geen_mark_badge ? 'yes' : 'no',
            'profile_mark_badge' => $request->profile_mark_badge ? 'yes' : 'no',
            'live_phone_call_support' => $request->live_phone_call_support ? 'yes' : 'no',
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Created Successfully');
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
        $data = Plan::where('id', 1)->first();
        return view('admin.plan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'plan_name' => 'required | string | max:255',
            'price' => 'required | numeric | min:1',
            'job_post_fee' => 'required | numeric | min:1 | max:100',
            'withdraw_fee' => 'required | numeric | min:1 | max:100',
            'post_bost_duration' => 'required | numeric | min:1',
            'daily_spin_limit' => 'required | numeric | min:1',
            'deposit_refer_commission' => 'required | numeric | min:1 | max:100',
            'task_commission' => 'required | numeric | min:1 | max:100',
        ]);
        $data = Plan::where('id', 1)->first();
        $data->update([
            'plan_name' => $request->plan_name,
            'price' => $request->price,
            'job_post_fee' => $request->job_post_fee,
            'withdraw_fee' => $request->withdraw_fee,
            'post_bost_duration' => $request->post_bost_duration,
            'daily_spin_limit' => $request->daily_spin_limit,
            'deposit_refer_commission' => $request->deposit_refer_commission,
            'task_commission' => $request->task_commission,
            'geen_mark_badge' => $request->geen_mark_badge ? 'yes' : 'no',
            'profile_mark_badge' => $request->profile_mark_badge ? 'yes' : 'no',
            'live_phone_call_support' => $request->live_phone_call_support ? 'yes' : 'no',
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Plan::where('id', 1)->first();
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
