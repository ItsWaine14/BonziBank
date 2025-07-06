<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class Balance extends Controller
{
    public static function getBalance($UID = null){
        $UID = $UID ?? Auth::id();
        return Transaction::where('user_id', Auth::id())
            ->sum(DB::raw(
                "CASE
                WHEN type = 'deposit' THEN amount
                WHEN type = 'withdraw' THEN -amount
                ELSE 0
                END"
            ));
    }
}