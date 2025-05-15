<?php

use App\Http\Controllers\FrontedController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontedController::class, 'index']);
Route::get('/shop', [FrontedController::class, 'ShopProduct']);
Route::get('/return', [FrontedController::class, 'ReturnProduct']);
Route::get('/catagory', [FrontedController::class, 'CatagoryProduct']);
Route::get('/type/{type}', [FrontedController::class, 'TypeProduct']);
Route::get('/view', [FrontedController::class, 'ViewProduct']);
Route::get('/cheackout', [FrontedController::class, 'cheackOutProduct']);
Route::get('/details', [FrontedController::class, 'ditailsProduct']);
Route::get('/sub-catagory', [FrontedController::class, 'subcatagoryProduct']);
Route::get('/thank-you', [FrontedController::class, 'thankyou']);

///policy///

Route::get('/privacy-policy',[FrontedController::class, 'privacypolicy']);
Route::get('/tearms-conditions',[FrontedController::class, 'tearmscondition']);
Route::get('/refund-policy',[FrontedController::class, 'refundpolicy']);
Route::get('/payment-policy',[FrontedController::class, 'paymentpolicy']);
Route::get('/about-us',[FrontedController::class, 'aboutUs']);
Route::get('/contact-us',[FrontedController::class, 'contactUs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
