<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class Home extends Controller
{
    public function __construct()
    {
        $this->students = new StudentModel();
    }
    public function index()
    {
        $pageName = ['page' => 'home'];
        echo view('components/header', $pageName);
        echo view('pages/home');
        echo view('components/courses');
        echo view('components/reviews');
        echo view('components/blogs');
        echo view('components/contact');
        echo view('components/footer');
    }
    public function login()
    {
        echo view("pages/login");
    }
    public function register()
    {
        echo view("pages/register");
    }

    public function signup()
    {
        $userModel = new StudentModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $password = $this->request->getPost('password');
        // $confirmPassword = $this->request->getPost('confirmPassword');
        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $email,
            'email' => $email,
            'password' => $password,
            'phone' => null,
            'city' => null,
            'create_at' => date('d-m-Y H:i:s'),
            'updated_at' => date('d-m-Y H:i:s')
        ];

        $userModel->insert($data);
    }
    public function signin()
    {
        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $student = new StudentModel();
        $result = $student->where('email', $username)
            ->where('password', $password)
            ->first();
        if ($result) {
            $session = session();
            $session->set('username', $username);
            $session->set('login_time', date('D-m-Y H:i:s'));
            return redirect()->to('/');
        } else {
            return redirect()->to('login')->with('error', 'Invalid Username or Password');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();


        return redirect()->to('/');

    }
    public function profile()
    {
        $students = new StudentModel();
        $studnetDetails = $students->getAllStudents();
        echo view('components/header', ['page' => 'profile']);
        echo view('pages/profile' , ['students' => $studnetDetails]);
    }

    public function about()
    {
        echo view('components/header', ['page' => 'about']);
        echo view("pages/about");
        echo view('components/footer');
    }

    public function careers()
    {
        echo view('components/header', ['page' => 'Careers']);
        echo view('pages/career');
        echo view('components/footer');
    }


}
