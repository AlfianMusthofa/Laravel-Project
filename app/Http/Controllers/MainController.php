<?php

namespace App\Http\Controllers;

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

      $datas = Product::all();

      $response = Http::get('https://api.escuelajs.co/api/v1/products');
      $products = $response->json();

      return view('landing', [
         "title" => "ShopCart | 50% Off",
         'categories' => $data,
         'datas' => $datas
      ]);
   }
}
