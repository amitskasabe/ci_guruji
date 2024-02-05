<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function register(): string
    {
        return view('register');
    }
    public function login(): string 
    {
        return view('login');
    }
}
