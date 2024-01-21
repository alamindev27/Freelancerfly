<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Testimonial::orderBy('created_at', 'DESC')->get();
        return view('admin.testimonials.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'title' => 'required | string | max:255',
            'description' => 'required | string | max:255',
            'image' => 'required | image | mimes:jpg,png',
        ]);

        $file = $request->file('image');
        $fileName = time().'-testimonial.'.$file->getClientOriginalExtension();
        $path = 'assets/uploads/';
        $request->image->move($path, $fileName);

        Testimonial::insert([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path.$fileName,
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
        $data = Testimonial::where('id', $id)->first();
        return view('admin.testimonials.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Testimonial::where('id', $id)->first();

        $request->validate([
            'name' => 'required | string | max:255',
            'title' => 'required | string | max:255',
            'description' => 'required | string | max:255',
            'image' => 'image | mimes:jpg,png',
        ]);
        if ($request->hasFile('image')) {
            unlink(base_path($data->image));

            $file = $request->file('image');
            $fileName = time().'-testimonial.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->image->move($path, $fileName);

            $data->update([
                'image' => $path.$fileName
            ]);
        }
        $data->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Testimonial::where('id', $id)->first();
        unlink(base_path($data->iamge));
        return back()->with('success', 'Deleted Successfully');
    }
}
