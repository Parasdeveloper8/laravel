<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadCont extends Controller
{
    function upload(Request $request){
        $request->validate([
            'file' => 'required|file|max:2048', // 2MB max file size
        ]);

        // Store file in 'public/uploads' directory
        $path = $request->file('file')->store('uploads', 'public');

        //return response()->json([
          //  'message' => 'File uploaded successfully',
          //  'path' => $path
        //]);
        return view('display',["path"=>$path]);
    }
}
