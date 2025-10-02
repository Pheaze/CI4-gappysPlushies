<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landingpage');
    }

    public function login(): string
    {
        return view('user/login');
    }

    public function signUp(): string
    {
        return view('user/signUp');
    }
}