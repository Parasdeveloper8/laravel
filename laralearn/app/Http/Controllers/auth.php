<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    function addUser(Request $req){
        //return $req;
        //echo $req->email;
        //validation ->
        $req->validate([
            'name'=>'required | uppercase', //custom rule
            'email'=>'required | email'
        ],
    [
        'name.uppercase' => "The name must be in capital letter paras"
    ]);
    }
}
