<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class AdminController extends Controller
{

    public function dashboard()
    {
        helper('url');
        $isLoggedIn = true;
        if ($isLoggedIn == false) {
            return redirect()->to("/admin");
        }
        return view("admin/static/index");
    }
    public function hello()
    {
        echo "admin login ";
    }

}