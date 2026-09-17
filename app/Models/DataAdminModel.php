<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAdminModel extends Model
{
    protected $table = 'data_admin';
    protected $primaryKey = 'id_data_admin';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_admin', 'username_admin', 'password_admin'];
    
}

