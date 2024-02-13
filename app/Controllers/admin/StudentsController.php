<?php

namespace App\Controllers\Admin;

use App\Models\admin\AdminModel;
use App\Models\StudentModel;
use CodeIgniter\Controller;

class StudentsController extends Controller
{

    public function index()
    {
        $studentents = new StudentModel();
        $studentsDetils = $studentents->allStudents();
        echo view('admin/static/students' , ['students' => $studentsDetils]);
    }


}