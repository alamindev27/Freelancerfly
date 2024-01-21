<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function userList() {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('admin.usre-list', compact('users'));
    }

    public function deleteUser($id) {
        $user = User::where('id', $id)->first();
        $arr = explode('/', $user->avatar);
        $img = end($arr);
        if ($img != 'avatar.png') {
            unlink(base_path($user->avatar));
        }
        $user->delete();
        return back()->with('success', 'Deleted Successfully');
    }


    public function privacyPolicy($id) {
        $data = Page::where('id', $id)->first();
        return view('admin.pages', compact('data'));
    }

    public function pageUpdate(Request $request, $id) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'content' => 'required | string',
        ]);
        $data = Page::where('id', $id)->first();
        $data->update([
            'heading' => $request->heading,
            'contenht' => $request->content
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
