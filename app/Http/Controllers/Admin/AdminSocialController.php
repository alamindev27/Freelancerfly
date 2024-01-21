<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminSocialController extends Controller
{
    public function index()
    {
        $socials = Social::all();
        return view('admin.social.index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'link' => 'required | string | url | max:255',
            'logo' => 'required | image | mimes:jpg,png,jpeg'
        ]);
        $file = $request->file('logo');
        $fileName = time().'-category.'.$file->getClientOriginalExtension();
        $path = 'assets/uploads/';
        $request->logo->move($path, $fileName);
        Social::insert([
            'name' => $request->name,
            'link' => $request->link,
            'logo' => $path.$fileName,
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
        $social = Social::where('id', $id)->first();
        return view('admin.social.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $social = Social::where('id', $id)->first();

        $request->validate([
            'name' => 'required | string | max:255',
            'link' => 'required | string | url | max:255',
            'logo' => 'image | mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('logo')) {
            unlink(base_path($social->logo));
            $file = $request->file('logo');
            $fileName = time().'-category.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->logo->move($path, $fileName);
            $social->update([
                'logo' => $path.$fileName
            ]);
        }

        $social->update([
            'name' => $request->name,
            'link' => $request->link
        ]);
        return back()->with('success', 'Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $social = Social::where('id', $id)->first();
        unlink(base_path($social->logo));
        $social->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
