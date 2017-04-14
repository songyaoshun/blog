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
}
