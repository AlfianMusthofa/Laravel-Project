<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      return view('dashboard.upload', [
         'categories' => Category::all()
      ]);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      // 
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      $validatedData = $request->validate([
         "name" => 'required',
         "price" => 'required',
         "category_id" => 'required',
         "image" => 'required|image'
      ]);

      if ($request->file('image')) {
         $validatedData['image'] = $request->file('image')->store('post-images');
      }

      Product::create($validatedData);

      return redirect('/dashboard');
   }

   /**
    * Display the specified resource.
    */
   public function show(Product $product)
   {
      dd($product);
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Product $product)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Product $product)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Product $product)
   {
      // Product::destroy($product->id);

      // return redirect('/dashboard');
   }
}
