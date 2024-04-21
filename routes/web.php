<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\SignUpController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/signup', [SignUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignUpController::class, 'store']);
Route::get('/productpage/{id}', [ProductPageController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'index']);

// Dashboard Routes
Route::get('/dashboard', function () {
   return view('dashboard.index', [
      "products" => Product::all()
   ]);
});

Route::resource('/dashboard/upload', DashboardPostController::class);

/* Penjelasan : 
   /dashboard/upload => Method POST => DashboardPostController => store.
   /dashboard/upload/{{ $data->$id }} => DashboardPostController =>show.            
*/
