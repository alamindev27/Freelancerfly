<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDepositController extends Controller
{
    public function pending() {
        $datas = Deposit::with('depositWithGetwayRelation', 'depositWithUserRelation')->where('status', 'pending')->latest()->get();
        return view('admin.deposit.history', compact('datas'));
    }
    public function approved() {
        $datas = Deposit::with('depositWithGetwayRelation', 'depositWithUserRelation')->where('status', 'success')->latest()->get();
        return view('admin.deposit.history', compact('datas'));
    }
    public function rejected() {
        $datas = Deposit::with('depositWithGetwayRelation', 'depositWithUserRelation')->where('status', 'rejected')->latest()->get();
        return view('admin.deposit.history', compact('datas'));
    }

    public function approvedStatus($id) {
        $data = Deposit::where('id', $id)->first();
        if ($data && $data->status == 'pending') {
            $data->update([
                'status' => 'success'
            ]);
            $user = User::where('id', $data->user_id)->first();
            $user->increment('main_balance', $data->amount);
            // Transaction::where('')
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('error', 'Undefind data');
        }
    }

    public function rejectedStatus($id) {
        $data = Deposit::where('id', $id)->first();
        if ($data && $data->status == 'pending') {
            $data->update([
                'status' => 'rejected'
            ]);
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('error', 'Undefind data');
        }
    }

    public function delete($id) {
        $data = Deposit::where('id', $id)->first();
        if ($data) {
            $data->delete();
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('error', 'Undefind data');
        }
    }
}
