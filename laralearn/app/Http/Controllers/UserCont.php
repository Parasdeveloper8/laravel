<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCont extends Controller
{
    function getUser(){
        return "Paras is a user";
    }
    function getUserName($name){
        return $name . " is a user";
    }
    function getView(){
        return view('view');
    }
    function getViewNes(){
        return view('admin.admin');
    }
}
