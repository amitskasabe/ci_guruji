<?php

namespace App\Controllers;

use App\Models\StudentModel;

class studentController extends BaseController
{
    public function register()
    {
        $student = new StudentModel();
        $studentData = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'phone' => $this->request->getPost('phone'),
            'city' => $this->request->getPost('city'),
        ];

        $student->insert($studentData);
        // return "hello";
    }


}
