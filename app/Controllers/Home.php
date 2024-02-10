<?php

namespace App\Controllers;

class Home extends BaseController
{
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
}
