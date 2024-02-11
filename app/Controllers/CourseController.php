<?php

namespace App\Controllers;

class CourseController extends BaseController
{
    public function index()
    {
        echo view("components/header" , ['page' => 'Courses']);
        echo view('components/courses');
        echo view("components/footer");
    }
    public function math()
    {
        $courseDetails = [
            "courseName" => "Basics Of Mathematicas",
            "Desciption" => " The best math course in your region",
            "Price" => 19999,
            "Images" => [
                base_url('public/assets/images/math.jpg'),
                base_url('public/assets/images/english.jpg'),
            ]
        ];
        echo view("components/header" , ['page' => 'Courses']);
        echo view('pages/courses/math' , $courseDetails);
        echo view("components/footer");
    }


}

?>