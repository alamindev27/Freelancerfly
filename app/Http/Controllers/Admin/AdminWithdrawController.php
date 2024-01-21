<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class AdminWithdrawController extends Controller
{
    public function pending() {
        $datas = Withdraw::with('withdrawWithGetwayRelation', 'withdrawWithUserRelation')->where('status', 'pending')->latest()->get();
        return view('admin.withdraw.history', compact('datas'));
    }
    public function approved() {
        $datas = Withdraw::with('withdrawWithGetwayRelation', 'withdrawWithUserRelation')->where('status', 'success')->latest()->get();
        return view('admin.withdraw.history', compact('datas'));
    }
    public function rejected() {
        $datas = Withdraw::with('withdrawWithGetwayRelation', 'withdrawWithUserRelation')->where('status', 'rejected')->latest()->get();
        return view('admin.withdraw.history', compact('datas'));
    }

    public function approvedStatus($id) {
        $data = Withdraw::where('id', $id)->first();
        if ($data && $data->status == 'pending') {
            $data->update([
                'status' => 'success'
            ]);
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('error', 'Undefind data');
        }
    }

    public function rejectedStatus($id) {
        $data = Withdraw::where('id', $id)->first();
        if ($data && $data->status == 'pending') {
            $data->update([
                'status' => 'rejected'
            ]);
            $user = User::where('id', $data->user_id)->first();
            $user->increment('main_balance', $data->amount);
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('error', 'Undefind data');
        }
    }

    public function delete($id) {
        $data = Withdraw::where('id', $id)->first();
        if ($data) {
            $data->delete();
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('error', 'Undefind data');
        }
    }
}
