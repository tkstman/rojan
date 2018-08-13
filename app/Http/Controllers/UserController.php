<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;


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
      try {

        $allProds = Product::orderBy('prod_id','desc')->paginate(10);

        //return $selectedImgs;
        return view('account', ['products'=>$allProds]);

      } catch (\Exception $e) {

      }
      return view('account');
    }

    public function getLogin()
    {
      return view('login');
    }

    public function getLogOut()
    {
      Auth::logout();
      return redirect()->back();
    }

    public function postLogin(Request $request)
    {
      $this->validate($request,[
        'username' =>'required',
        'password' =>'required'
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
