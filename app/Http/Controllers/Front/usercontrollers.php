<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class usercontrollers extends BaseController
{
public function showusername(){
   // return "shahedhejazi";

//public function showusername1(){
   // $data=[];
   // $data['id']=5;
    //$data['name']='shahedyasser';
  
    //return view('welcome',$data);
//}
$obj= new \stdClass();
$obj->name='shahed';
$obj->id=5;
$obj->gender='male';
$data=['shahed','hejazi'];
   return view('welcome',compact('data'));

   // return view('welcome',compact('obj'));

}
}