<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Human;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SampleController extends Controller {
    public function insertform(){
        return view('register');
    }
    public function welcome(Request $request){
        $humans = Human::all();
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $data=array('first_name'=>$first_name,"middle_name"=>$middle_name,"last_name"=>$last_name,"email"=>$email,"age"=>$age,"gender"=>$gender,"address"=>$address);
        DB::table('humans')->welcome($data);
        echo "Record inserted successfully.<br/>";
    }
}

