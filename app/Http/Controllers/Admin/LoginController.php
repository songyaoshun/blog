<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends CommonController
{
    public function login()
    {
        return view('admin.login');
    }

    public function code()
    {
        echo 123;
    }
}
