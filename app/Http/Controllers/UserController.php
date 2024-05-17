<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function register()
    {
        return view('login.register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
 
        return back()->with('success', 'Register successfully');
        // Auth::login($user);
        // return redirect('post')->with('success', 'Register successfully');
      
    }
    

    
    public function index()
    {
        return view('login.form');
    }


    public function login(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)){
            return redirect('post')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}