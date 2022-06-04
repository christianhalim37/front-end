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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginkuController;
use App\Http\Controllers\VendorkuController;
use App\Http\Controllers\TopsisController;

Route::get('/', function () {
    return view('dashboard');


});

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::post('/logincek',[LoginkuController::class,'ceklogin']);
Route::get('/tes',[TopsisController::class,'get_linguistik']);
Route::post('/registersave',[LoginkuController::class,'saveuser']);
Route::post('/registervendor',[VendorkuController::class,'savevendor']);
Route::post('/detailpernikahansave',[LoginkuController::class,'savedetailpernikahan']);
Route::get('/profileuser',[LoginkuController::class,'lihatprofile'])->name("profileuser");
Route::get('/registervendor',[VendorkuController::class,'lihatkategori'])->name("vendorkategori");


Route::get('/register',function(){
    return view('register');
})->name('register');

Route::get('/registervendor2',function(){
    return view('registervendor');
})->name('registervendor');

Route::get('/rekomendasi',function(){
    return view('rekomendasi');
})->name('rekomendasi');


Route::get('/category',function(){
    return view('category');
})->name('category');

Route::get('/dashboard', 'ViewController@homepage');
Route::get('/category', 'ViewController@categorypage');

Route::get('/logout',function(){
    Session::flush();
    return redirect("/");
});