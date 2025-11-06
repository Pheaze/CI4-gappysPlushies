<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function Dashboard(): string
    {
        return view('admin/adminPage');
    }

}