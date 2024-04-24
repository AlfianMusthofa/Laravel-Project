<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
   function index()
   {
      $url = base_path('public/categories.json');
      $jsonContents = file_get_contents($url);
      $data = json_decode($jsonContents, true);

      $datas = Product::paginate(20);

      return view('landing', [
         "title" => "ShopCart | 50% Off",
         'categories' => $data,
         'datas' => $datas
      ]);
   }
}
