<?php

namespace App\Controllers;

class BcController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\DataUserModel();
    }

    public function bcHTML()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Bootcamp HTML | Code Navigate'
        ];
        return view('/bootcamp/bc-html', $data);
    }

    public function bcCSS()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Bootcamp CSS | Code Navigate'
        ];
        return view('/bootcamp/bc-css', $data);
    }

    public function bcJS()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Bootcamp JavaScript | Code Navigate'
        ];
        return view('/bootcamp/bc-js', $data);
    }

    public function bcPHP()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Bootcamp PHP | Code Navigate'
        ];
        return view('/bootcamp/bc-php', $data);
    }
}