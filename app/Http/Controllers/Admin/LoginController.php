<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once '/data1/www/blog/resources/views/org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login()
    {
        if($input = Input::all()){
            $code=new \Code;
            $_code=$code->get();
            if(strtoupper($input['code'])!=$_code){
               return back()->with('msg','验证码错误');
            }
            $user = User::first();

            if($user->user_name == $input['user_name'] || Crypt::decrypt($user->user_passwd)==$input['user_passwd']){
                return back()->with('msg','用户名或者密码错误！');
            }


            echo ok;

        }else{
            $user = User::all();
            dd($user);
        }
    }

    public function code()
    {
        $code=new \Code;
        $code->make();
    }

    public function crypt()
    {
        $str='123456';

        echo Crypt::encrypt($str);

        echo '<br>faffaf';

        echo Crypt::decrypt(Crypt::encrypt($str));
    }

}
