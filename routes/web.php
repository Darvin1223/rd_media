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


/* The getting routes */
Route::get('/', function () {
    return view('index');
});

Route::get('/arte-y-cultura', function(){
    return view('cultura');
});


/* The posting routes */
