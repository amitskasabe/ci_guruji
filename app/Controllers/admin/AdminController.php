<?php

namespace App\Controllers\Admin;

use App\Models\admin\AdminModel;
use App\Models\Admin\BlogModel;
use App\Models\Admin\CategoryModel;
use CodeIgniter\Controller;
use CodeIgniter\Config\Services;

class AdminController extends Controller
{

    public function dashboard()
    {
        $isLoggedIn = false;
        helper('url');
        $autoload['libraries'] = ['session'];
        $session = session();
        $userDetail = $session->get('userDetails');
        // $username = "amit";
        // $fname = $userDetail['first_name'];

        // $lname = $userDetail['last_name'];
   
        $username = $userDetail;
        if ($username) {
            $isLoggedIn = true;
        }

        if($username == false)
        {
            return redirect()->to('admin');
        }
        
        return view("admin/static/index", ['firstname' => $username]);
    }
    public function loginpage()
    {
        return view("admin/static/pages-sign-in");
    }
    public function login()
    {
        $username = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        $adminModel = new AdminModel();
        $user = $adminModel->where('username', $username)->first();

        if ($user) {
            // Compare plain text password
            if ($password === $user['password']) {
                $session = session();
                $userDetails = [
                    'username' => $username,
                    'first_name' => "amit",
                    'last_name' => "kasabe",
                ];
                $session->set('userDetails', $userDetails);
                return redirect()->to('/admin/dashboard');
            } else {
                // Incorrect password
                echo "Incorrect password!";
            }
        } else {
            // User does not exist
            echo "User not found!";
        }
    }
    // admin logout 

    public function logout()
    {
        // Load the session service
        $session = Services::session();

        // Destroy all sessions
        $session->destroy();

        // Redirect to the login page or any other page after logout
        return redirect()->to('admin');
    }
}