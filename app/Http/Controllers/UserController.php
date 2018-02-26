<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getContact()
    {
       return view('contact');
    }

    public function getHome()
    {
       return view('home');
    }
}
