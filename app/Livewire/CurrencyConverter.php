<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CurrencyConverter extends Component
{
    public $amount = 1;
    public $from = 'USD';
    public $to = 'PHP';
    public $result;

public function convert()
{
    $response = Http::get("https://api.apilayer.com/exchangerates_data/convert", [
    'from' => $this->from,
    'to' => $this->to,
    'amount' => $this->amount,
    'apikey' => 'A2cIDlTXf5wV6LQQqnEgfGgjDR0aK27l', //api key !only 100 requests dont test too much
    ]);


    $this->result = $response['result'] ?? null;
}


    public function render()
    {
        return view('livewire.currency-converter');
    }
}

