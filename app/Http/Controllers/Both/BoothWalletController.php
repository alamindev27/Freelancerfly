<?php

namespace App\Http\Controllers\Both;

use App\Http\Controllers\Controller;
use App\Models\Accumulate;
use App\Models\Deposit;
use App\Models\PaymentGetway;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BoothWalletController extends Controller
{
    public function index() {
        // $transactions = Transaction::
        return view('both.wallets');
    }
    public function mainBalance () {
        $getways = PaymentGetway::all();
        $histories = Deposit::with('depositWithGetwayRelation')->where('user_id', auth()->user()->id)->latest()->get();
        return view('both.main-balance', compact('getways', 'histories'));
    }

    public function submitBalance(Request $request, $id) {
        $request->validate([
            'sender_number' => 'required | string | max:255',
            'trxid' => 'required | string | max:255',
            'amount' => 'required | numeric | min:5',
            'bdt_amount' => 'required | numeric | min:1'
        ]);
        $getwayId = Crypt::decrypt($id);
        $getway = PaymentGetway::where('id', $getwayId)->first();
        Deposit::insert([
            'user_id' => auth()->user()->id,
            'getway_id' => $getwayId,
            'sender_number' => $request->sender_number,
            'trx_id' => $request->trxid,
            'amount' => $request->amount,
            'bdt_amount' => $request->bdt_amount,
            'created_at' => Carbon::now()
        ]);
        Transaction::insert([
            'user_id' => auth()->user()->id,
            'transaction_source' => 'Add Fund to Main',
            'type' => 'Credit',
            'amount' => $request->amount,
            'payment_method' => $getway->account_name,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Submited Successfully');
    }

    function depositBalance(){
        $histories = Accumulate::orderBy('created_at', 'DESC')->get();
        return view('both.deposit-balance', compact('histories'));
    }

    public function depositBalanceStore(Request $request) {
        $request->validate([
            'deopsit_month' => 'required',
            'interest' => 'required',
            'balance_type' => 'required',
            'deposit_amount' => 'required | numeric | min:3',
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->balance_type == 1) {
            if ($user->main_balance < $request->deposit_amount) {
                return back()->with("error", "You don t have enough main balance.");
            }
            Accumulate::insert([
                'user_id' => auth()->user()->id,
                'interest' => $request->interest,
                'amount' => $request->deposit_amount,
                'profit_amount' => $request->deposit_amount * $request->interest / 100,
                'deopsit_month' => Carbon::today()->addMonths($request->deopsit_month),
                'status' => 'Running',
                'created_at' => Carbon::now()
            ]);
            $user->decrement('main_balance', $request->deposit_amount);
            $user->increment('deposit_balance', $request->deposit_amount);
            return back()->with('success', 'Added Successfully');
        }elseif($request->balance_type == 2){
            if ($user->earning_balance < $request->deposit_amount) {
                return back()->with("error", "You don t have enough earning balance.");
            }
            Accumulate::insert([
                'user_id' => auth()->user()->id,
                'interest' => $request->interest,
                'amount' => $request->deposit_amount,
                'profit_amount' => $request->deposit_amount * $request->interest / 100,
                'deopsit_month' => Carbon::today()->addMonths($request->deopsit_month),
                'status' => 'Running',
                'created_at' => Carbon::now()
            ]);
            $user->decrement('earning_balance', $request->deposit_amount);
            $user->increment('deposit_balance', $request->deposit_amount);
            return back()->with('success', 'Added Successfully');
        }else{
            return back()->with('error', 'Invalid selected');
        }

    }
}
