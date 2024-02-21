<?php

namespace App\Controllers;

use App\Models\ContactUsModel;
use App\Models\HomeworkModel;
use App\Models\StudentModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Files\UploadedFile;


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
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // $confirmPassword = $this->request->getPost('confirmPassword');
        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $email,
            'email' => $email,
            'password' => $hashedPassword,
            'phone' => null,
            'city' => null,
            'create_at' => date('d-m-Y H:i:s'),
            'updated_at' => date('d-m-Y H:i:s')
        ];

        $isReister = $userModel->insert($data);
        if ($isReister) {
            return redirect()->to('login');
        }
    }
    public function signin()
    {
        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $student = new StudentModel();

        // Retrieve the user data based on the provided email
        $userData = $student->where('email', $username)->first();

        if ($userData && password_verify($password, $userData['password'])) {
            // Password is correct
            $session = session();
            $session->set('username', $username);
            $session->set('login_time', date('D-m-Y H:i:s'));
            return redirect()->to('/');
        } else {
            // Invalid Username or Password
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
        $session = session();
        $currentUser = $session->get('username');

        $studnetDetails = $students->getAllStudents($currentUser);
        $currentuser = $studnetDetails[0]['email'];
        $courses = $students->getAllCourses($currentuser);
        
        // print_r($courses);
        
        echo view('components/header', ['page' => 'profile']);
        echo view('pages/profile', ['students' => $studnetDetails, 'courses' => $courses]);
        echo view('components/footer');
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

    public function contact()
    {
        echo view('components/header', ['page' => 'Contact']);
        echo view('pages/contact',);
        echo view('components/footer');
    }

    public function contactUs()
    {
       $contact = new ContactUsModel();
       $contactData = [
        "email" => $this->request->getPost('email'),
        "subject" => $this->request->getPost('subject'),
        "message" => $this->request->getPost('message'),
       ];
       if($contact->insert($contactData)){
        return redirect()->to('contact')->with('message','Data Has Been Submitted'); 
       } else {
        echo " Something went wrong";
       }

    }
    
    public function UploadHomework()
    {
        $homework = new HomeworkModel();
        $student =  new StudentModel();
        $session = session();
        $currentUser = $session->get('username');
        $currentUser = $student->getAllStudents($currentUser);
        print_r($currentUser);
        $userId = $currentUser[0]['id'];
        echo $userId;
        // exit();
        $files = $this->request->getFiles();
        if (!empty($files)) {
            foreach ($files['homework'] as $file) {
                // Check if a file is valid and hasn't been moved
                if ($file->isValid() && !$file->hasMoved()) {
                    // Print information about the uploaded file
                    $newName = $file->getRandomName();
                    $file->move('./public/homework', $newName);
                    $data = [
                        'id' => $userId,
                        'assignment_id' => 456,
                        'file_path' => $newName, // Store the filename in the database
                        'comments' => 'Great work!',
                    ];
                    if ($homework->insert($data)) {
                        return redirect()->to('profile')->with('message',' Homework Submitted Successfully');
                    } else {
                        return redirect()->to('profile')->with('message','Something Went Wrong , we can not accept your home at this moment.');
                    }

                    
                } else {
                    echo 'No valid file uploaded for file ' . $file->getName() . '<br>';
                }
            }
        } else {
            echo 'No files uploaded.';
        }

    }
    public function notes()
    {
        echo view('components/header' , ['page' => 'Notes']);
        echo view('pages/notes');
        echo view('components/footer');
    }

    public function gallery()
    {
        echo view('components/header' , ['page' => 'Gallery']);
        echo view('pages/gallery');
        echo view('components/footer');
    }
}
