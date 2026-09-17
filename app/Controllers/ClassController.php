<?php

namespace App\Controllers;

class ClassController extends BaseController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\DataUserModel();
    }

    public function classHTML()
    {

        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'title' => 'HTML | Code Navigate',
            'premium_user' => $user['transaction_status'] == 'settlement'
        ];
        return view('/class/class-html', $data);
    }

    public function classCSS()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'title' => 'CSS | Code Navigate',
            'premium_user' => $user['transaction_status'] == 'settlement'
        ];
        return view('/class/class-css', $data);
    }

    public function classJS()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'title' => 'JavaScript | Code Navigate',
            'premium_user' => $user['transaction_status'] == 'settlement'
        ];
        return view('/class/class-js', $data);
    }

    public function classPHP()
    {
        $user = $this->userModel->find(session()->get('user_id'));

        $data = [
            'title' => 'PHP | Code Navigate',
            'premium_user' => $user['transaction_status'] == 'settlement'
        ];

        return view('/class/class-php', $data);
    }

    public function quizHTML()
    {
        $user = $this->userModel->find(session()->get('user_id'));
        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Quiz HTML | Code Navigate'
        ];
        return view('/class/quiz-html', $data);
    }

    public function quizCSS()
    {
        $user = $this->userModel->find(session()->get('user_id'));
        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Quiz CSS | Code Navigate'
        ];
        return view('/class/quiz-css', $data);
    }

    public function quizJS()
    {
        $user = $this->userModel->find(session()->get('user_id'));
        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Quiz JavaScript | Code Navigate'
        ];
        return view('/class/quiz-js', $data);
    }

    public function quizPHP()
    {
        $user = $this->userModel->find(session()->get('user_id'));
        $data = [
            'premium_user' => $user['transaction_status'] == 'settlement',
            'title' => 'Quiz PHP | Code Navigate'
        ];
        return view('/class/quiz-php', $data);
    }
}