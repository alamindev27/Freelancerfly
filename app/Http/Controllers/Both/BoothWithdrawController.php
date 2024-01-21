<?php

namespace App\Http\Controllers\Both;

use App\Http\Controllers\Controller;
use App\Models\PaymentGetway;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BoothWithdrawController extends Controller
{
    public function earningBalance() {
        $getways = PaymentGetway::all();
        return view('both.earning-balance', compact('getways'));
    }
    public function transferMainBalace(Request $request) {
        $request->validate([
            'amount' => 'required | numeric | min:1'
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        $user->decrement('earning_balance', $request->amount);
        $user->increment('main_balance', $request->amount);
        return redirect()->route('user.wallet.index')->with('success', 'Transfer Successfully');
    }

    public function withdraw(Request $request, $id) {
        $request->validate([
            'account_number' => 'required | string | max:255',
            'amount' => 'required | numeric | min:3',
        ]);
        $getway = PaymentGetway::where('id', $id)->first();
        Withdraw::insert([
            'user_id' => auth()->user()->id,
            'getway_id' => $id,
            'account_number' => $request->account_number,
            'amount' => $request->amount,
            'charge' => $getway->charge,
            'Receive_amount' => $request->amount - ($request->amount * $getway->charge / 100),
            'bdt_amount' => ($request->amount * 100) - ($request->amount * $getway->charge / 100),
            'note' => $request->note,
            'created_at' => Carbon::now()
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        $user->decrement('earning_balance', $request->amount);
        Transaction::insert([
            'user_id' => auth()->user()->id,
            'transaction_source' => 'Withdraw From Earning',
            'type' => 'Debit',
            'amount' => $request->amount,
            'payment_method' => $getway->account_name,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('user.wallet.index')->with('success', 'Submited Successfully');
    }
}
