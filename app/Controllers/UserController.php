<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function insertUser()
    {
        // $validation = \Config\Services::validation();
        // if (!$validation->withRequest($this->request)->run()) {
        //     return $this->response->setJSON(['message' => 'user already exists'])->setStatusCode(409);
        // }
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

        $userModel = new UserModel();

        $userExists = $userModel->where('firstname', $this->request->getPost('firstname'))->first();

        if ($userExists) {
            // Username already exists, return a message
            return $this->response->setJSON(['message' => 'Username already exists'])->setStatusCode(400);
        }

        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'password' => $this->request->getPost('password')
        ];

        $userModel->insert($data);

        echo "User added successfully";
    }

    function selectUsers()
    {
        $userModel = new UserModel();

        $query = $userModel->query('SELECT id, firstname, lastname FROM users');
        $result = $query->getResult();

        $result = json_encode($result);

        print_r($result);
    }

    public function delete()
    {
        $userModel = new UserModel();
        $userId = $this->request->getPost("id");

        // Check if $userId is provided and is a valid integer
        if (!empty($userId) && ctype_digit($userId)) {
            $result = $userModel->where('id', $userId)->delete();

            if ($result) {
                echo "Record deleted successfully";
            } else {
                echo "Failed to delete record";
            }
        } else {
            echo "Invalid or missing user ID";
        }
    }

    public function update()
    {
        $userModel = new UserModel();

        // Get the data from the POST request
        $userId = $this->request->getPost("id");
        $newData = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        // Check if $userId is provided and is a valid integer
        if (!empty($userId) && is_numeric($userId)) {
            $result = $userModel->update($userId, $newData);

            if ($result) {
                echo "Record updated successfully";
            } else {
                echo "Failed to update record";
            }
        } else {
            echo "Invalid or missing user ID";
        }
    }


}

?>
