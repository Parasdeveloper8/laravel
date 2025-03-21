<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCont;
use App\Http\Controllers\Auth;

Route::get('/', function () {
    return view('index');
});

//named routes
Route::view('/userForm','user-form')->name('us');
Route::post('/addUser',[Auth::class,'addUser']);
/*
Route::get("/user",[UserCont::class,'getUser']);
//passing variable in controller
Route::get("/user/{name}",[UserCont::class,'getUserName']);
//rendering page
Route::get("/page",[UserCont::class,'getView']);
//Rendering nested page
Route::get("/admin",[UserCont::class,'getViewNes']);

#Route::view('/home','paras');

//try with path param
//Route::get('/path/{name}',function($name){
   // echo $name;
   // return view('pathparam',["name"=>$name]);
//});

//redirect
#Route::redirect('/home','/');

*/