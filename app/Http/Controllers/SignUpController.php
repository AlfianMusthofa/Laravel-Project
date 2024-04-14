<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
   function index()
   {
      return view('signup', [
         'title' => 'Nice To Meet You | Lets Create Your Account'
      ]);
   }

   function store(Request $request)
   {
      $validatedData = $request->validate([
         "name" => 'required',
         "email" => 'required|email:dns',
         "password" => 'required'
      ]);

      User::create($validatedData);

      return redirect('/login');
   }
}
