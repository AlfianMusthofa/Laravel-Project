<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
   function index($id)
   {

      $product = Product::find($id);

      return view('productpage', [
         "title" => $product['name'],
         "data" => $product
      ]);
   }
}
