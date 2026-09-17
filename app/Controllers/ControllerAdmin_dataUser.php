<?php

namespace App\Controllers;

use App\Models\DataUserModel;

class ControllerAdmin_dataUser extends BaseController
{
    private $DataUserModel;
    public function __construct()
    {
        $this->DataUserModel = new DataUserModel();
    }

    public function User()
    {
        $DataUser = $this->DataUserModel->findAll();
        $data = [
            'title' => 'Admin',
            'datauser' => $DataUser
        ];

        return view('admin/data_user', $data);
    }

    public function Create()
    {
        session();
        $data = [
            'title' => 'Add Account',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/create_dataUser', $data);
    }

    public function save()
    {
        // Validation Input
        if (
            !$this->validate([
                'namaUser' => 'required'
            ])
        ) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/create_dataUser')->withInput()->with('validation', $validation);
        }

        $this->DataUserModel->save([
            'nama_user' => $this->request->getPost(['namaUser']),
            'username_user' => $this->request->getPost(['usernameUser']),
            'password_user' => $this->request->getPost(['passwordUser']),
            'email_user' => $this->request->getPost(['emailUser']),
        ]);

        session()->setFlashdata('pesan', 'Data added successfully');

        return redirect()->to('/admin/data_user');
    }

    public function delete($id_data_user)
    {
        $this->DataUserModel->delete($id_data_user);
        session()->setFlashdata('pesan', 'Data deleted successfully');
        return redirect()->to('/admin/data_user');
    }

    public function edit($id_data_user)
    {
        $DataUserModel = new DataUserModel();
        $data_user = $DataUserModel->find($id_data_user);
        $data = [
            'title' => 'Update Account',
            'data' => $data_user
            
        ];
        return view('/admin/edit_dataUser', $data );
    }

    public function update($id_data_user)
    {
        $this->DataUserModel->save([
            'id_data_user' => $id_data_user,
            'nama_user' => $this->request->getPost(['nama_user']),
            'username_user' => $this->request->getPost(['username_user']),
            'password_user' => $this->request->getPost(['password_user']),
            'email_user' => $this->request->getPost(['email_user']),
        ]);
        return redirect()->to('/admin/data_user');
    }
}
