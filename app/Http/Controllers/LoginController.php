<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   function index()
   {
      return view('components.login', [
         'title' => 'Welcome | Please Login to Your Account'
      ]);
   }

   function authenticate(Request $request)
   {
      $credentials = $request->validate([
         "email" => 'required|email:dns',
         "password" => 'required'
      ]);

      if (Auth::attempt($credentials)) {
         $request->session()->regenerate();
         return redirect()->intended('/');
      }

      return back()->with('loginerror', 'Login Failed');
   }
}
