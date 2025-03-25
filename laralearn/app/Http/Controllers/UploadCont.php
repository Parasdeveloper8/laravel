<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadCont extends Controller
{
    function upload(Request $req){
        $path = $req->file('file')->store('public','local'); // Saves to storage/app/public/
        $fileName = basename($path); // Extract filename
        $fileUrl = asset("/storage/app/private/public/$fileName"); // Generate public URL
    
        return view("display", ["link" => $fileUrl]);
    }
}
