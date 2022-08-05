<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ExternalAPIController;

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
    return view('index');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');;
    Route::post('/login', [LoginController::class, 'login'])->name('logout');;
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/logout', [LoginController::class, 'logout']);
});
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    //DASHBOARD
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    //SETTINGS
    Route::get('/settings/api', [DashboardController::class, 'settingsApi'])->name('dashboard.settings.api');
    Route::post('/settings/api', [DashboardController::class, 'settingsApiCreate'])->name('dashboard.settings.api.create');
    Route::get('/settings/api/list', [DashboardController::class, 'settingsApiList'])->name('dashboard.settings.api.list');
    //MAHASISWA
    Route::resource('mahasiswa', '\App\Http\Controllers\MahasiswaController');
    //EXTERNAL API
    Route::group(['prefix' => 'api', 'middleware' => 'auth'], function () {
        Route::get('/covid', [ExternalAPIController::class, 'covid'])->name('external.api.covid');
    });
});