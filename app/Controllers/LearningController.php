<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class LearningController extends Controller
{
    public function index()
    {
       echo view('components/header' , ["page" => "Learning"]);
       echo view('pages/learn/learning');
    }
}