<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAdvertisementController extends Controller
{
    public function pending() {
        $advertisements = Advertisement::with('advertisementWithUserRelation')->where('status', 'pending')->orderBy('created_at', 'DESC')->get();
        return view('admin.advertisement.advertisement', compact('advertisements'));
    }
    public function approved() {
        $advertisements = Advertisement::with('advertisementWithUserRelation')->where('status', 'success')->orderBy('created_at', 'DESC')->get();
        return view('admin.advertisement.advertisement', compact('advertisements'));
    }
    public function rejected() {
        $advertisements = Advertisement::where('status', 'rejected')->orderBy('created_at', 'DESC')->get();
        return view('admin.advertisement.advertisement', compact('advertisements'));
    }

    public function approvedStatus($id) {
        $advertisement = Advertisement::with('advertisementWithUserRelation')->where([['id', $id], ['status', 'pending']])->first();
        $advertisement->update([
            'status' => 'success'
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function rejectedStatus($id) {
        $advertisement = Advertisement::where([['id', $id], ['status', 'pending']])->first();
        $advertisement->update([
            'status' => 'rejected'
        ]);
        $user = User::where('id', $advertisement->user_id)->first();
        $user->increment('main_balance', $advertisement->price);
        return back()->with('success', 'Updated Successfully');
    }


    public function delete($id) {
        $advertisement = Advertisement::where([['id', $id], ['status', 'pending']])->first();
        unlink(base_path($advertisement->image));
        $user = User::where('id', $advertisement->user_id)->first();
        $user->increment('main_balance', $advertisement->price);
        $advertisement->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
