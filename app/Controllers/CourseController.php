<?php

namespace App\Controllers;

class CourseController extends BaseController
{
    public function math($courseName)
    {
        return view('pages/course' , ['courseName' => $courseName]);
    }


}

?>