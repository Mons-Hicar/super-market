<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BeveragesController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\GourmetController;
use App\Http\Controllers\Front\GroceriesController;
use App\Http\Controllers\Front\HouseholdController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\OffersController;
use App\Http\Controllers\Front\PackagedfoodsController;
use App\Http\Controllers\Front\PersonalcareController;
use App\Http\Controllers\Front\ProductsController;
use App\Http\Controllers\Front\RegisteredController;
use App\Http\Controllers\Front\ShortcodesController;
use App\Http\Controllers\Front\SingleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/beverages', [BeveragesController::class,'index']);
Route::get('/checkout', [CheckoutController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/faq', [FaqController::class,'index']);
Route::get('/gourmet', [GourmetController::class,'index']);
Route::get('/groceries', [GroceriesController::class,'index']);
Route::get('/household', [HouseholdController::class,'index']);
Route::get('/login', [LoginController::class,'index']);
Route::get('/registered', [RegisteredController::class,'index']);
Route::post('/registered-user', [RegisteredController::class,'ReisterUser'])->name('registered-user');



Route::get('/offers', [OffersController::class,'index']);
Route::get('/packagedfoods', [PackagedfoodsController::class,'index']);
Route::get('/personalcare', [PersonalcareController::class,'index']);
Route::get('/products', [ProductsController::class,'index']);
Route::get('/short-codes', [ShortcodesController::class,'index']);
Route::get('/single', [SingleController::class,'index']);
Route::get('/', [IndexController::class,'index']);
Route::get('/', [IndexController::class,'index']);
Route::get('/', [IndexController::class,'index']);
Route::get('/', [IndexController::class,'index']);
