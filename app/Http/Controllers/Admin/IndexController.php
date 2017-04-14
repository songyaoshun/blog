<?php

namespace App\Http\Controllers\Admin;

use Dotenv\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class IndexController extends CommonController
{
    public function index()
    {
        return view('admin.index');
    }

    public function info()
    {
        return view('admin.info');
    }

    //更改超级管理员密码

    public function pass()
    {

        if ($input=Input::all()){
            $rules=[
                'password'=>'required',
            ];

            $validator=Validator::make($input,$rules);

            if($validator->pass()){
                echo 'Yes';
            }else{
                 dd($validator->errors()->all());
            }

        }else{
            return view('admin.pass');
        }

    }
}
