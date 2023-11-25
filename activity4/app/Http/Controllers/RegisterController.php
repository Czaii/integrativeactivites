<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    Public function register_submit(Request $request){
        $username=$request->username;
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $password=$request->password;
        $sex=$request->sex;
        $data= array('username'=>$username,
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'password'=>$password,
                    'sex'=>$sex);
        return view('register_submit',$data);
    }
}