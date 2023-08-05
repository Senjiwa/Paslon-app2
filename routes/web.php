<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KomentarController;
//use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DapilController;
use App\Http\Controllers\Admin\AdminCoblosController;
use App\Http\Controllers\Admin\FraksiController;
use App\Http\Controllers\Admin\AdminPartaiController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoblosController;


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

Route::get('/', [HomeController::class,'index'])->name('landing-page');

Route::get('/auth', [AuthController::class,'index'])->name('login-page');
Route::post('/auth',[AuthController::class,'store'])->name('store-login');

Route::get('/auth/register', [AuthController::class,'register'])->name('register-page');
Route::post('/auth/register',[AuthController::class,'storeRegister'])->name('store-register');
Route::get('/auth/get-dapil/{id}', [DapilController::class,'GetDapil']);

Route::get('/auth/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/berita/{id}', [HomeController::class,'beritaDetail'])->name('berita-detail');

// Route::get('/input', function () {
//     return view('/create/input');
// });

// Route::get('/create', [\App\Http\Controllers\PaslonController::class, 'create']);
// Route::post('/daftar', [\App\Http\Controllers\PaslonController::class, 'store']);
// Route::post('/create/store', [\App\Http\Controllers\PaslonController::class, 'store']);

Route::get('/paslon', [PaslonController::class, 'getForUser']);
Route::get('/paslon/{id}', [PaslonController::class, 'showForUser'])->name('detail-paslon');

Route::get('/get-komentar/{id}', [KomentarController::class, 'getKomentar']);
Route::post('/add-komentar', [KomentarController::class, 'addKomentar'])->name('add-komentar');
Route::post('/add-reply', [KomentarController::class, 'addReply']);

Route::post('/coblos/{id}', [CoblosController::class, 'coblos'])->name('coblos');

Route::group(['middleware'=>'userMiddle'], function(){
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile-update');
});

Route::prefix('admin')->group(function(){
    Route::get('/login', [Admin\Auth\LoginController::class,'loginForm'])->name('admin.login');
    Route::post('/login',[Admin\Auth\LoginController::class,'login'])->name('admin-store-login');

    Route::group(['middleware'=>'adminMiddle'], function(){
        Route::group(['middleware'=>'verifRolesAdmin:app'], function(){
            Route::resource('berita', BeritaController::class);
            Route::resource('dapil', DapilController::class);
            Route::resource('fraksi', FraksiController::class);
            Route::resource('admin-partai', AdminPartaiController::class);
            
            Route::get('/berita/slider/{id}', [BeritaController::class, 'setSlider']);
        });

        // Route::group(['middleware'=>'verifRolesAdmin:partai'], function(){
        //     Route::resource('data-paslon', PaslonController::class);
        // });
        Route::resource('tambah', PaslonController::class);
        
        Route::get('/', [Admin\HomeController::class,'index']);
        Route::get('/data-coblos', [AdminCoblosController::class, 'index'])->name('data-coblos');
        Route::get('/get-dapil/{id}', [DapilController::class,'GetDapil']);
        Route::get('/home', [Admin\HomeController::class,'index'])->name('admin.home');
        Route::get('/logout',[Admin\Auth\LoginController::class,'logout'])->name('admin-logout');
    });
});


