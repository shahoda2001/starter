<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return ('hello');
});
Route::get('/test2/{id}', function ($id) {
    return $id;
})->name ('a');
Route::get('/test3/{id?}', function () {
    return ('welcome');
}) ->name ('b');
Route::namespace('Front')->group(function(){
    Route::get('users','usercontrollers@showusername');  
});
//الشكل الاول للgroup 
//Route::prefix('users')->group(function(){
 //   Route::get('show','usercontrollers@showusername');  
  //  Route::delete('delete','usercontrollers@showusername');  
  //  Route::get('edit','usercontrollers@showusername');  
  //  Route::put('update','usercontrollers@showusername');  
//});
//الشكل التاني لل group
//Route::group(['prefix'=>'users'],function(){
 //   Route::get('show','usercontrollers@showusername');  
  // Route::delete('delete','usercontrollers@showusername');  
  // Route::get('edit','usercontrollers@showusername');  
  // Route::put('update','usercontrollers@showusername');  
//});
//الشكل الاول لmiddleware

//Route::get('check',function(){
   // return "middleware";
//})->middleware('auth');
//الشكل التاني للmiddleware
   // Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
     //   Route::get('/',function(){
//return 'work';
    //    });
   // Route::get('show','usercontrollers@showusername');  
     //  Route::delete('delete','usercontrollers@showusername');  
     //  Route::get('edit','usercontrollers@showusername');  
     // Route::put('update','usercontrollers@showusername');  
   //});
  // Route::get('second','admin\secondcontroller@showstring');
  //route::group(['namespace'=>'admin'],function(){
   // Route::get('second','secondcontroller@showstring');
  //});
 /* route::group(['namespace'=>'admin'],function(){
    Route::get('second','secondcontroller@showstring')->middleware('auth');
    Route::get('second1','secondcontroller@showstring1');
    Route::get('second2','secondcontroller@showstring2');
    Route::get('second3','secondcontroller@showstring3');

  });

    route::get('login',function(){
        return "shahed";
    })->name('login');*/
    //route::resource('news','newscontroller');   
     //route::get('index','Front\usercontrollers@showusername');
    
 // Route::get('/', function () {
  ////  return view('welcome')->with('data','shahedyasserhejazi');
///});
//Route::get('/', function () {
 // return view('welcome')->with(['string'=>'shahedyasserhejazi','age'=>20]);
//});
//Route::get('/landing', function () {
 // return view('landing');
//});

//Route::get('/about', function () {
 // return view('about');
//});
//Route::get('master', function () {
 // return view('layouts\master');
//});*/
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/', function () {
  return ('home');
});
?>