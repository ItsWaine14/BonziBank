<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoneyTransfer extends Model
{
    protected $fillable = ['user_id', 'recipient_id', 'type', 'amount'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function recipient(){
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
