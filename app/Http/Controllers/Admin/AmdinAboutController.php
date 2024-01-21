<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AmdinAboutController extends Controller
{
    public function index() {
        $data = About::where('id', 1)->first();
        return view('admin.about.home-about', compact('data'));
    }

    public function update(Request $request) {
        $data = About::where('id', 1)->first();
        $request->validate([
            'title' => 'required | string | max:255',
            'description' => 'required',
            'image' => 'image | mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('image')) {
            $arr = explode('/', $data->image);
            $image = end($arr);
            if ($image != 'default-about-image.png') {
                unlink(base_path($data->image));
            }
            $file = $request->file('image');
            $fileName = time().'-about.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->image->move($path, $fileName);
            $data->update([
                'image' => $path.$fileName
            ]);
        }

        $data->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
