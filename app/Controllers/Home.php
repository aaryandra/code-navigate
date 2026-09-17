<?php

namespace App\Controllers;

use App\Models\DataAdminModel;
use App\Models\DataUserModel;

class Home extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Code Navigate'
        ];
        return view('/layout/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Code Navigate'
        ];
        return view('/layout/register', $data);
    }

    public function signup()
    {
        $session = session();
        $modelUser = new DataUserModel();
        $modelAdmin = new DataAdminModel();
        $username = $this->request->getVar('username_user');
        $data_user = $modelUser->where('username_user', $username)->first();
        $data_admin = $modelAdmin->where('username_admin', $username)->first();
        if ($data_admin) {
            $session->setFlashdata('msg', 'Username telah terdaftar');
            return redirect()->to('/register');
        } else if ($data_user) {
            $session->setFlashdata('msg', 'Username telah terdaftar');
            return redirect()->to('/register');
        } else {
            $modelUser->save([
                'nama_user' => $this->request->getVar('namaUser'),
                'username_user' => $this->request->getVar('usernameUser'),
                'password_user' => $this->request->getVar('passwordUser'),
                'email_user' => $this->request->getVar('emailUser'),
            ]);
            session()->setFlashdata('pesan', 'Data added successfully');
            return redirect()->to('/login');
        }
    }


    public function auth()
    {
        $session = session();
        $modelUser = new DataUserModel();
        $modelAdmin = new DataAdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data_user = $modelUser->where('username_user', $username)->first();
        $data_admin = $modelAdmin->where('username_admin', $username)->first();
        if ($data_user) {
            $pass = $data_user['password_user'];
            if ($password === $pass) {
                $ses_data = [
                    'user_id' => $data_user['id_data_user'],
                    'user_name' => $data_user['nama_user'],
                    'email_user' => $data_user['email_user'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else if ($data_admin) {
            $pass = $data_admin['password_admin'];
            if ($password === $pass) {
                $ses_data = [
                    'admin_id' => $data_admin['id_data_admin'],
                    'admin_name' => $data_admin['nama_admin'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/data_admin');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username not found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
