<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin;



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

Route::get('/paslon/{id}', [\App\Http\Controllers\PaslonController::class, 'show']);

Route::prefix('admin')->group(function(){
    Route::get('/', [Admin\Auth\LoginController::class,'loginFrom']);
    Route::get('/login', [Admin\Auth\LoginController::class,'loginFrom'])->name('admin.login');
});


