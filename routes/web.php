<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/home', function () {
   // dd(\Illuminate\Support\Facades\Auth::user());
//})->middleware( 'auth' , "verified");

Route::view('/home', 'home')->middleware(['auth', 'verified']);
