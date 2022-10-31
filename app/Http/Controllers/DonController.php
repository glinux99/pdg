<?php

namespace App\Http\Controllers;

use Omnipay\Omnipay;
use Illuminate\Http\Request;

class DonController extends Controller
{
    private $gateway;
    public function __contruct()
    {
        $this->gateway = Omnipay::create("PayPal_Rest");
        $this->gateway->setClientId('PAYPAL_CLIENT_ID');
        $this->gateway->setSecret('PAYPAY_CLIENT_SECRET');
        $this->gateway->setTestMode(true);
    }
    public function dons(Request $request)
    {
        try {
            $response = $this->gateway->purchase(
                array(
                    'amount' => $request->amount,
                    'currency' => env('PAYPAL_CURRENCY'),
                    'retrunUrl' => url('success'),
                    'cancelUrl' => url('error')
                )
            );
            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
