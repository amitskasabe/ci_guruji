<?php

namespace App\Controllers\Admin;

use App\Models\admin\AdminModel;
use App\Models\HomeworkModel;
use App\Models\StudentModel;
use CodeIgniter\Controller;

class HomeworkController extends Controller
{
    public function ShowHomework()
    {
        $homeworkModel = new HomeworkModel();
        $getAllStudents = $homeworkModel->allStudentHomework();
        // print_r($getAllStudents);
        // exit();
        echo view('admin/static/homework' , ['homeworkDetails' => $getAllStudents]);
        
    }

}