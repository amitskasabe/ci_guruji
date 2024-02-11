<?php

namespace App\Controllers\Admin;

use App\Models\admin\AdminModel;
use CodeIgniter\Controller;

class StudentsController extends Controller
{

    public function index()
    {
        echo view('admin/static/students');
    }


}