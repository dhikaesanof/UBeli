<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function createSnapToken()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . time(),
                'gross_amount' => 20000, // contoh Rp20.000
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('checkout', compact('snapToken'));
    }
}
