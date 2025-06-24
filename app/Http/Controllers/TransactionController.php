<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function index(){
        return view('transaction');
    }

    public function withdraw(Request $request){
        $amount = $request->input('amount');

        Transaction::create(['user_id' => Auth::id(), 'type' => 'withdraw', 'amount' => $amount,]);

        return redirect()->back()->with('message', "Withdraw ₱$amount successfully.");
    }

    public function deposit(Request $request){
        $amount = $request->input('amount');

        Transaction::create(['user_id' => Auth::id(), 'type' => 'deposit', 'amount' => $amount,]);

        return redirect()->back()->with('message', "Deposited ₱$amount successfully.");
    }
}
