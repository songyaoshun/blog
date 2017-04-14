<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

require_once '/data1/www/blog/resources/views/org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login()
    {
        if($input=Input::all()){
            $code=new \Code;
            $_code=$code->get();
            if($input['code']!=$_code){
                return back()->with('msg','验证码错误');
            }
        }else{
            return view('admin.login');
        }
    }

    public function code()
    {
        $code=new \Code;
        $code->make();
    }

    public function getcode()
    {

    }

}
