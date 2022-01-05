<?php

use App\Http\Controllers\PemainController;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/owner', function () {
    return view('owner', [
        "title" => "owner",
        "nama" => "MUHAMMAD FADHIL PRATAMA",
        "email" => "fadhilpratamaC3@gmail.com",
        "img" => "Fadhil.jpg"
    ]);
});

Route::get('/pemain',[PemainController::class, 'index']);



//Route::get('/pemain', function () {
    //return view('pemain', [
        //"title" => "Pemain"
   // ]);
//});
