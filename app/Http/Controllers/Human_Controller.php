<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Human;

class Human_Controller extends Controller
{
    public function welcome(Request $request){
        $humans = Human::all();

        return view('welcome',['humans'=>$humans]);

    }
}
