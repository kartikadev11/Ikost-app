<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){
        return view('homeAdmin',[
            "title" => "Home"
        ]);
}
}