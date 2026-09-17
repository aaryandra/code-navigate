<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataUserModel;
use CodeIgniter\HTTP\ResponseInterface;



class PaymentController extends BaseController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new DataUserModel();
    }

    public function paymentProcess($userId)
    {
        $data = $this->request->getJSON(true);

        $user = $this->userModel->find([
            'id_data_user' => $userId,
        ]);

        if (!$user) {
            return response()->setStatusCode(ResponseInterface::HTTP_NOT_FOUND);
        }

        $savedData = [
            'order_id' => $data['order_id'],
            'payment_type' => $data['payment_type'],
            'transaction_time' => $data['transaction_time'],
            'transaction_status' => $data['transaction_status'],
        ];

        if (isset($data['va_numbers'])) {
            $savedData['va_number'] = $data['va_numbers'][0]['va_number'];
            $savedData['bank'] = $data['va_numbers'][0]['bank'];
        }

        $status = $this->userModel->where('id_data_user', $userId)->set($savedData)->update();

        return response()->setJSON([
            'status' => $status,
        ],);
    }
}
