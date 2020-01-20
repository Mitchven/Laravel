<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Human_Contoller extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
