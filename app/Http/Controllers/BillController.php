<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bill;
use App\Models\Transaction;
use App\Models\BillPayment;

class BillController extends Controller
{
    public function billForm(){
        $balance = Balance::getBalance();
        $bills = Bill::all();
        $paidBills = BillPayment::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('bill', ['balance' => $balance, 'bills' => $bills, 'paidBills' => $paidBills]);
    }

    public function pay(Request $request){
        $request->validate([
            'bill_id' => 'required|exists:bills,id',
            'amount' => 'required|numeric|min:1',
        ]);

        $balance = Balance::getBalance();
        $sender = Auth::user();
        $bill = Bill::findOrFail($request->bill_id);

        if($balance < $request->amount){
            return back()->with('error', "Insufficient balance.");
        }

        Transaction::create(['user_id' => $sender->id, 'type' => 'withdraw', 'amount' => $request->amount]);
        BillPayment::create(['user_id' => $sender->id, 'bill_id' => $bill->id, 'amount' => $request->amount]);

        return back()->with('success', "Successfully paid ₱" . number_format($request->amount, 2, '.', ',') . " for " . $bill->name);
    }
}