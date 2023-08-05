<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\ProfileController;

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
    return view('home');
});

Route::get('/input', function () {
    return view('/create/input');
});

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/paslon', [\App\Http\Controllers\PaslonController::class, 'index']);
Route::post('/create/store', [\App\Http\Controllers\PaslonController::class, 'store']);

Route::get('/', [\App\Http\Controllers\PaslonController::class, 'show']);

