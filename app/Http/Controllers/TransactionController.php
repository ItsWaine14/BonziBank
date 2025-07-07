<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function dashboardBalance(){
        $balance = Balance::getBalance();

        return view('dashboard', ['balance' => $balance]);
    }
    public function index(){
        $balance = Balance::getBalance();

        $transactions = Transaction::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('transaction', compact('transactions'), ['balance' => $balance]);
    }

    public function withdraw(Request $request){
        $amount = $request->input('amount');

        Transaction::create(['user_id' => Auth::id(), 'type' => 'withdraw', 'amount' => $amount,]);

        return redirect()->back()->with('message', "Withdraw ₱" . number_format($amount, 2, '.', ',') . " successfully.");
    }

    public function deposit(Request $request){
        $amount = $request->input('amount');

        Transaction::create(['user_id' => Auth::id(), 'type' => 'deposit', 'amount' => $amount,]);

        return redirect()->back()->with('message', "Deposited ₱" . number_format($amount, 2, '.', ',') . " successfully.");
    }

    // public function balance(){
    //     $balance = Balance::getBalance();
    //     return view('balance', ['balance' => $balance]);
    // }
}
