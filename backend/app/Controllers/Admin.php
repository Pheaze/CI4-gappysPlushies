<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function Dashboard(): string
    {
        return view('admin/adminPage');
    }

    public function Orders(): string
    {
        return view('admin/ordersPage');
    }

    public function products(): string
    {
        return view('admin/productPage');
    }

   

}