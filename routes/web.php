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
Route::get('/profileuseredit',[LoginkuController::class,'editprofile'])->name("profileuseredit");
Route::get('/registervendor',[VendorkuController::class,'lihatkategori'])->name("vendorkategori");
Route::get('/viewvendor2',[VendorkuController::class,'viewpaket'])->name("viewtablepaket");
Route::get('/viewdetailpaket',[VendorkuController::class,'viewdetail'])->name("viewtabledetail");

Route::post('/registerpaketvendor',[VendorkuController::class,'savepaketvendor']);
Route::post('/detailpaketvendor',[VendorkuController::class,'savedetailpaketvendor']);
Route::post('/profileuseredit',[LoginkuController::class,'updateuser']);

Route::get('/register',function(){
    return view('register');
})->name('register');


Route::get('/editvendor',function(){
    return view('editvendor');
})->name('editvendor');

Route::get('/rekomendasi',function(){
    return view('rekomendasi');
})->name('rekomendasi');

Route::get('/vendor',function(){
    return view('vendor');
})->name('vendor');

Route::get('/detailpaket',function(){
    return view('detailpaket');
})->name('detailpaket');



Route::get('/category',function(){
    return view('category');
})->name('category');

Route::get('/dashboard', 'ViewController@homepage');
Route::get('/category', 'ViewController@categorypage');

Route::get('/logout',function(){
    Session::flush();
    return redirect("/");
});