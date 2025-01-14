<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    function myfunction(Request $req){
        $data['myinput'] =$req->input('myinput');
       
        return view('myview',$data);
    }
}
