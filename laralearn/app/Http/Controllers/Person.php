<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Person extends Controller
{
    function getUsers(){
        $users = \App\Models\User::all();
        return view('db.index',["users"=>$users]);
    }
}
