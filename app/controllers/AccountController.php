<?php

namespace App\Controllers;
use App\Core\App;
class AccountController{
    
    public function Login(){
        return view('login');
    }

    public function Register(){
        return view('register');
    }

    public function ForgetPassword(){
        return view('forget');
    }

    public function Logout(){
        /*
        save work and session destroy
         */
        return view('login');
    }

    public function loginSubmit(){
        return view('index');
    }
}