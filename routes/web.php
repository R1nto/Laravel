<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\ZodiakController;
use App\Http\Controllers\SuhuController;
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
    return view('tugas');
});

Route::get('kalkulator',[KalkulatorController::class,'bang']);
Route::get('zodiak',[ZodiakController::class,'index']);
Route::get('suhu',[SuhuController::class,'index']);

Route::post('zodiak',[ZodiakController::class,'zodiak']);
Route::post('kalkulator',[KalkulatorController::class,'kalkulator']);
Route::post('suhu',[SuhuController::class,'suhu']);

// Route::get('/', [FrontController::class,'index']);
// Route::get('show/{id}', [FrontController::class,'show']);
// Route::get('register', [FrontController::class,'register']);
// Route::post('postregister', [FrontController::class,'store']);
