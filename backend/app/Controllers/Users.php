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

    public function moodBoard(): string
    {
        return view('user/mood');
    }

    public function roadMap(): string
    {
        return view('user/road');
    }

    public function logout()
    {
    session()->destroy();

        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 3600,
            $params['path'] ?? '/',
            $params['domain'] ?? '',
            isset($_SERVER['HTTPS']),
            true
        );

    return redirect()->to('/');
    }
}