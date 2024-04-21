<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   function index(Category $id)
   {
      return view('category', [
         "title" => $id->name,
         "products" => $id->products,
         "category" => $id->name
      ]);
   }
}
