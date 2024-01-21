<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function edit() {
        $data = Banner::where('id', 1)->first();
        return view('admin.banner.edit', compact('data'));
    }
    public function update(Request $request) {
        $data = Banner::where('id', 1)->first();
        $request->validate([
            'heading_first_part' => 'required | string | max:255',
            'heading_second_part' => 'required | string | max:255',
            'heading_third_part' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'image_rounded' => 'image | mimes:jpg,png,jpeg',
            'image_circle' => 'image | mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('image_rounded')) {
            $arr1 = explode('/', $data->image_rounded);
            $img1 = end($arr1);
            if ($img1 != 'right-pic-1.jpg') {
                unlink(base_path($data->image_rounded));
            }
            $file = $request->file('image_rounded');
            $fileName1 = time().'-banner-1.'.$file->getClientOriginalExtension();
            $path1 = 'assets/uploads/';
            $request->image_rounded->move($path1, $fileName1);
            $data->update([
                'image_rounded' => $path1.$fileName1
            ]);
        }
        if ($request->hasFile('image_circle')) {
            $arr2 = explode('/', $data->image_circle);
            $img2 = end($arr2);
            if ($img2 != 'right-pic-2.jpg') {
                unlink(base_path($data->image_circle));
            }
            $file = $request->file('image_circle');
            $fileName1 = time().'-banner-2.'.$file->getClientOriginalExtension();
            $path1 = 'assets/uploads/';
            $request->image_circle->move($path1, $fileName1);
            $data->update([
                'image_circle' => $path1.$fileName1
            ]);
        }


        $data->update([
            'heading_part_1' => $request->heading_first_part,
            'heading_part_2' => $request->heading_second_part,
            'heading_part_3' => $request->heading_third_part,
            'text' => $request->text,
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
