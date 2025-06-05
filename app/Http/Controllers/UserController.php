<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginpage(){
        return view('pages.auth.login-page');
    }
    public function registrationpage(){
        return view('pages.auth.registration-page');
    }
    public function resetpage(){
        return view('pages.auth.reset-pass-page');
    }
    public function sendpage(){
        return view('pages.auth.send-otp-page');
    }
     public function verifypage(){
        return view('pages.auth.verify-page');
    }


}
