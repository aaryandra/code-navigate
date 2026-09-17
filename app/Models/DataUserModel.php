<?php

namespace App\Models;

use CodeIgniter\Model;

class DataUserModel extends Model
{
    protected $table = 'data_user';
    protected $primaryKey = 'id_data_user';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_user', 'username_user', 'password_user', 'email_user', 'order_id', 'payment_type', 'transaction_time', 'transaction_status', 'va_number', 'bank'];
}