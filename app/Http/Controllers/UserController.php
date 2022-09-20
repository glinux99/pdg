<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view("pages.login");
    }
    public function register()
    {
        return view('pages.register');
    }
    public function adhesion()
    {
        return view('pages.adhesion');
    }
}
