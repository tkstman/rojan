<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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

    public function getSearch()
    {
       return view('search');
    }

    public function getProduct()
    {
      return view('product');
    }

    public function getAccount()
    {
      return view('account');
    }

    public function getLogin()
    {
      return view('login');
    }

    public function postLogin(Request $request)
    {
        $username = $request['username'];
        $password = bcrypt($request['password']);

        if(Auth::attempt(['user_name'=>$username,'password'=>bcrypt($password)]))
        {
          return redirect()->route('account');
        }
         echo bcrypt($password); //redirect()->back()->with(['value'=>bcrypt($password)]);


    }
}
