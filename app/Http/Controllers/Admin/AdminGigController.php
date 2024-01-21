<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Models\GigBanner;
use Illuminate\Http\Request;

class AdminGigController extends Controller
{
    public function pending() {
        $gigs = Gig::with('gigWithUserRelation')->where('status', 'pending')->orderBy('created_at', 'DESC')->get();
        return view('admin.gig.pendig', compact('gigs'));
    }
    public function approved() {
        $gigs = Gig::with('gigWithUserRelation')->where('status', 'success')->orderBy('created_at', 'DESC')->get();
        return view('admin.gig.pendig', compact('gigs'));
    }
    public function rejected() {
        $gigs = Gig::where('status', 'rejected')->orderBy('created_at', 'DESC')->get();
        return view('admin.gig.pendig', compact('gigs'));
    }

    public function approvedStatus($id) {
        $gig = Gig::with('gigWithUserRelation')->where([['id', $id], ['status', 'pending']])->first();
        $gig->update([
            'status' => 'success'
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function rejectedStatus($id) {
        $gig = Gig::where([['id', $id], ['status', 'pending']])->first();
        $gig->update([
            'status' => 'rejected'
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function delete($id) {
        $gig = Gig::where([['id', $id], ['status', 'pending']])->first();
        // unlink(base_path($gig->image));
        $banners = GigBanner::where('gig_id',$gig->id)->get();
        foreach ($banners as $key => $banner) {
            unlink(base_path($banner));
            $banner->delete();
        }
        $gig->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
