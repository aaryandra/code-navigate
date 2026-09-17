<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\DataUserModel();
    }

    public function index()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-kG7v-YvG9rr5wkLsKn_EY5Cf';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 25000,
            )
        ];

        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'snapToken' => \Midtrans\Snap::getSnapToken($params),
            'title' => 'Home | Code Navigate',
            'premium_user' => $user['transaction_status'] == 'settlement'
        ];

        return view('/pages/home', $data);
    }

    public function landing()
    {
        $data = [
            'title' => 'Code Navigate'
        ];
        return view('/pages/landing', $data);
    }

    public function class()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'title' => 'Class | Code Navigate',
            'premium_user' => $user['transaction_status'] == 'settlement'
        ];
        return view('/pages/class', $data);
    }

    public function bootcamp()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'title' => 'Bootcamp | Code Navigate',
            'premium_user' => $user['transaction_status'] == 'settlement'
        ];
        return view('/pages/bootcamp', $data);
    }

    // public function history()
    // {
    //     $data = [
    //         'title' => 'History | Code Navigate'
    //     ];
    //     return view('/pages/history', $data);
    // }
}
