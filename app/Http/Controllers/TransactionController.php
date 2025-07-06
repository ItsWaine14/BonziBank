<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function dashboardBalance(){
        $balance = Balance::getBalance();

        return view('dashboard', ['balance' => $balance]);
    }
    public function index(){
        //Remove balance if not planning to display in the form
        $balance = Balance::getBalance();

        $transactions = Transaction::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('transaction', compact('transactions'), ['balance' => $balance]);
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

    public function balance(){
        $balance = Balance::getBalance();
        return view('balance', ['balance' => $balance]);
    }

    public function transferForm(){
        //Remove balance if not planning to display in the form
        $balance = Balance::getBalance();
        return view('transfer', ['balance' => $balance]);
    }

    public function transfer(Request $request){
        $request->validate([
            'recipient_email' => 'required|email',
            'amount' => 'required|numeric|min:1',
        ]);

        $recipient = User::where('email', $request->recipient_email)->first();
        $sender = Auth::user();
        $balance = Balance::getBalance();

        if(!$recipient){
            return back()->with('error', "Email does not exist.");
        }
        if($recipient->id === Auth::id()){
            return back()->with('error', "Cannot transfer money to your own account.");
        }
        if($balance < $request->amount){
            return back()->with('error', "Insufficient balance."); //: ₱" . $balance
        }

        Transaction::create(['user_id' => $sender->id, 'type' => 'withdraw', 'amount' => $request->amount]);
        Transaction::create(['user_id' => $recipient->id, 'type' => 'deposit', 'amount' => $request->amount]);

        return back()->with('success', "Transferred ₱" . $request->amount . " to " . $recipient->email);
    }
}
