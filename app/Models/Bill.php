<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['name'];

    public function payments(){
        return $this->hasMany(BillPayment::class);
    }
}
