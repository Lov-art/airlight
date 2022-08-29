<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //Add image
    public function addImage(){
        return view('create-news');
    }
}
