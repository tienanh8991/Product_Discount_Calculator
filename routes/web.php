<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',function (){
   return view('product');
});

Route::post('product',function (Illuminate\Http\Request $request){
   $amount = $request->price * $request->percent * 0.1 ;
   $lastPrice = $request->price - $amount;
   $description = $request->description;
   $price = $request->price;
   $percent = $request->percent;
   return view('show_discount_amount', compact(['lastPrice', 'amount', 'description', 'price', 'percent']));
});
