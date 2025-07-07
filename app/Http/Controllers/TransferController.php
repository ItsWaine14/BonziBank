<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Transaction;

class TransferController extends Controller
{
    public function transferForm(){
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
            return back()->with('error', "Insufficient balance.");
        }

        Transaction::create(['user_id' => $sender->id, 'type' => 'withdraw', 'amount' => $request->amount]);
        Transaction::create(['user_id' => $recipient->id, 'type' => 'deposit', 'amount' => $request->amount]);

        return back()->with('success', "Transferred ₱" . number_format($request->amount, 2, '.', ',') . " to " . $recipient->email);
    }
}