<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCont;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Person;
use App\Http\Middleware\Form;
use App\Http\Controllers\UploadCont;
use App\Http\Controllers\mailController;

Route::get('/', function () {
    return view('index');
});

//named routes
//Route::view('/userForm','user-form')->name('us')->middleware('check');
//applying middleware on specific route
Route::view('/userForm','user-form')->middleware(Form::class)->name('us');
Route::post('/addUser',[Auth::class,'addUser']);

Route::get('/data',[Person::class,'getUsers']);

Route::view('/upload','upload');
Route::post('/uploadFile',[UploadCont::class,'upload']);

Route::get('/mail',[mailController::class,'sendMail']);
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