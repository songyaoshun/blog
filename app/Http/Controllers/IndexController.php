<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index()
    {
        $pdo=DB::connection()->getPdo();
        dd($pdo);
    }

    //更改超级管理员密码

    public function pass()
    {

        if ($input=Input::all()){
            dd($input);
        }else{
            return view('admin.pass');
        }

    }
}
