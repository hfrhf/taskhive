<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login.index");
    }
    public function login(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $cord=["email"=>$email,"password"=>$password];
        
        if(Auth::attempt($cord)){
            return to_route("home");
        }else{
            return back()->withErrors([
                "email"=>"كلمة السر او البريد الالكتروني خاطئ"
            ]);
        }
    }

   
    /**
     * Remove the specified resource from storage.
     */

     public function logout(){
        Session::flush();
        Auth::logout();
        return to_route("login.index");
     }

}
