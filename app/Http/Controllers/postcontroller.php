<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    function index(){
        return view('post');
    }
}
