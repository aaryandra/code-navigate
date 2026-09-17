<?php

namespace App\Controllers;

use App\Models\DataAdminModel;

class ControllerAdmin_dataAdmin extends BaseController
{
    protected $DataAdminModel;

    public function __construct()
    {
        $this->DataAdminModel = new DataAdminModel();
    }

    public function Admin()
    {
        $DataAdmin = $this->DataAdminModel->findAll();
        $data = [
            'title' => 'Admin',
            'dataadmin' => $DataAdmin
        ];

        return view('admin/data_admin', $data);
    }

    public function Create()
    {
        session();
        $data = [
            'title' => 'Add Account',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/create_dataAdmin', $data);
    }

    public function save()
    {
        // Validation Input
        if (
            !$this->validate([
                'namaAdmin' => 'required'
            ])
        ) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/create_dataAdmin')->withInput()->with('validation', $validation);
        }

        $this->DataAdminModel->save([
            'nama_admin' => $this->request->getPost(['namaAdmin']),
            'username_admin' => $this->request->getPost(['usernameAdmin']),
            'password_admin' => $this->request->getPost(['passwordAdmin']),
            'email_admin' => $this->request->getPost(['emailAdmin']),
        ]);

        session()->setFlashdata('pesan', 'Data added successfully');

        return redirect()->to('/admin/data_admin');
    }

    public function delete($id_data_admin)
    {
        $this->DataAdminModel->delete($id_data_admin);
        session()->setFlashdata('pesan', 'Data deleted successfully');
        return redirect()->to('/admin/data_admin');
    }

    public function edit($id_data_admin)
    {
        $DataAdminModel = new DataAdminModel();
        $data_admin = $DataAdminModel->find($id_data_admin);
        $data = [
            'title' => 'Update Account',
            'data' => $data_admin
            
        ];
        return view('/admin/edit_dataAdmin', $data );
    }

    public function update($id_data_admin)
    {
        $this->DataAdminModel->save([
            'id_data_admin' => $id_data_admin,
            'nama_admin' => $this->request->getPost(['nama_admin']),
            'username_admin' => $this->request->getPost(['username_admin']),
            'password_admin' => $this->request->getPost(['password_admin']),
        ]);
        return redirect()->to('/admin/data_admin');
    }


}
