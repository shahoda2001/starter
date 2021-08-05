<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
class secondcontroller extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth')->except('showstring2');

    }
    public function showstring(){
        return "static string";
    }
    public function showstring1(){
        return "static string1";
    }
    public function showstring2(){
        return "static string2";
    } public function showstring3(){
        return "static string3";
    } public function showstring4(){
        return "static string4";
    }
}
