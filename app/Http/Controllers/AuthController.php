<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.customer.login');
    }
    public function register(){
        return view('auth.customer.register');
    }
}
