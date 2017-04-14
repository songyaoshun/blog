<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


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
                'password'=>'required|between:6,20',
            ];

            $message=[
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码必须是6到20位之间！',
            ];

            $validator=Validator::make($input,$rules,$message);

            if($validator->passes()){
                echo 'Yes';
            }else{
                 dd($validator->errors()->all());
            }

        }else{
            return view('admin.pass');
        }

    }
}
