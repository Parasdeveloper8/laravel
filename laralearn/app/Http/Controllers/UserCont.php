<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; 
class UserCont extends Controller
{
    function getUser(){
        return "Paras is a user";
    }
    function getUserName($name){
        return $name . " is a user";
    }
    function getView(){
        $name = "only view";
        $users = ["v","a","b","c"];
        return view('view',["name"=>$name,"users"=>$users]);
    }
    function getViewNes(){
        //let's check if admin/admin exist
        if(View::exists('admin.admin')){
        return view('admin.admin');
        }else{
           echo "View not found";
        }
    }
}
