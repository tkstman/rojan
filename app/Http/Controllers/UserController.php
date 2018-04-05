<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;



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
        $this->validate($request,[
          'username' =>'required',
          'password' =>'required|min:4|max:71'
        ]);

        $username = trim($request['username']);
        $password = $request['password'];

        $user = User::where('user_name',$username)->first();

        if(password_verify($password,$user->password)) //'$2y$05$4oH0br87feNt8NDQ8pUv2e1cNKHhp39RM0SLaGMh3w.Iqwm6cjdfq'
        {
          //Check if user is active state 1 else prevent login
          if($user->active == 1)
          {
              Auth::login($user);
              return redirect()->route('account');
          }
          else if($user->active ==0)
          {
            //User has not been activated
          }
          else if($user->active ==2)
          {
            //User was fired and removed
          }
        }
        return redirect()->back();
    }
}
