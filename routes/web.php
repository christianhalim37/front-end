<?php

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
    return view('dashboard');

});

Route::get('/login',function(){
    return view('login');
})->name('login');


Route::get('/register',function(){
    return view('register');
})->name('register');

Route::get('/registervendor',function(){
    return view('registervendor');
})->name('registervendor');

Route::get('/category',function(){
    return view('category');
})->name('category');

Route::get('/dashboard', 'ViewController@homepage');
Route::get('/category', 'ViewController@categorypage');