<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResponsibilityAndStep;
use Illuminate\Http\Request;

class AdminResponsibilityAndStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function change() {
        $data = ResponsibilityAndStep::where('id', 1)->first();
        return view('admin.responsibility-speps.responsibility-speps', compact('data'));
    }

    public function updateResponsibility(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'check_1' => 'required | string | max:255',
            'check_2' => 'required | string | max:255',
            'check_3' => 'required | string | max:255',
            'check_4' => 'required | string | max:255',
            'step_one_title' => 'required | string | max:255',
            'step_one_text' => 'required | string | max:255',
            'step_one_icon' => 'image | mimes:jpg,png,jpeg',
            'step_two_title' => 'required | string | max:255',
            'step_two_text' => 'required | string | max:255',
            'step_two_icon' => 'image | mimes:jpg,png,jpeg',
            'step_three_title' => 'required | string | max:255',
            'step_three_text' => 'required | string | max:255',
            'step_three_icon' => 'image | mimes:jpg,png,jpeg',
            'step_four_title' => 'required | string | max:255',
            'step_four_text' => 'required | string | max:255',
            'step_four_icon' => 'image | mimes:jpg,png,jpeg',
        ]);

        $step = ResponsibilityAndStep::where('id', 1)->first();

        if ($request->hasFile('step_one_icon')) {
            $step_oneArr = explode('/', $step->step_one_icon);
            $step_one_icon = end($step_oneArr);
            if ($step_one_icon != 'icon1.png') {
                unlink(base_path($step->step_one_icon));
            }

            $file = $request->file('step_one_icon');
            $fileName1 = time().'-step-responsibility-.'.$file->getClientOriginalExtension();
            $path1 = 'assets/uploads/';
            $request->step_one_icon->move($path1, $fileName1);
            $step->update([
                'step_one_icon' => $path1.$fileName1
            ]);

        }


        if ($request->hasFile('step_two_icon')) {
            $step_twoArr = explode('/', $step->step_two_icon);
            $step_two_icon = end($step_twoArr);
            if ($step_two_icon != 'icon4.png') {
                unlink(base_path($step->step_two_icon));
            }

            $file = $request->file('step_two_icon');
            $fileName2 = time().'-step-responsibility-.'.$file->getClientOriginalExtension();
            $path2 = 'assets/uploads/';
            $request->step_two_icon->move($path2, $fileName2);
            $step->update([
                'step_two_icon' => $path2.$fileName2
            ]);

        }


        if ($request->hasFile('step_three_icon')) {
            $step_threeArr = explode('/', $step->step_three_icon);
            $step_three_icon = end($step_threeArr);
            if ($step_three_icon != 'icon3.png') {
                unlink(base_path($step->step_three_icon));
            }

            $file = $request->file('step_three_icon');
            $fileName3 = time().'-step-responsibility-.'.$file->getClientOriginalExtension();
            $path3 = 'assets/uploads/';
            $request->step_three_icon->move($path3, $fileName3);
            $step->update([
                'step_three_icon' => $path3.$fileName3
            ]);

        }


        if ($request->hasFile('step_four_icon')) {
            $step_fourArr = explode('/', $step->step_four_icon);
            $step_four_icon = end($step_fourArr);
            if ($step_four_icon != 'icon3.png') {
                unlink(base_path($step->step_four_icon));
            }

            $file = $request->file('step_four_icon');
            $fileName4 = time().'-step-responsibility-.'.$file->getClientOriginalExtension();
            $path4 = 'assets/uploads/';
            $request->step_four_icon->move($path4, $fileName4);
            $step->update([
                'step_four_icon' => $path4.$fileName4
            ]);
        }
        $step->update([
            'heading' => $request->heading,
            'text' => $request->text,
            'check_1' => $request->check_1,
            'check_2' => $request->check_2,
            'check_3' => $request->check_3,
            'check_4' => $request->check_4,
            'step_one_title' => $request->step_one_title,
            'step_one_text' => $request->step_one_text,
            'step_two_title' => $request->step_two_title,
            'step_two_text' => $request->step_two_text,
            'step_three_title' => $request->step_three_title,
            'step_three_text' => $request->step_three_text,
            'step_four_title' => $request->step_four_title,
            'step_four_text' => $request->step_four_text,
        ]);

        return back()->with('success', 'Updated Successfully');


    }
}
