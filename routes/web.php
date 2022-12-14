<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Events\LiveChatEvent;
use App\Events\Message;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ExternalAPIController;
use App\Http\Controllers\LiveChatController;

Route::domain('api.sahrulgnwn.my.id')->group(function() {
    Route::group(['middleware' => 'auth'], function () {
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
});

Route::get('/', function () {
    return view('index');
})->name('home');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.proccess');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'livechat'], function () {
    Route::get('/', [LiveChatController::class, 'index'])->name('livechat.index');
    Route::post('/', [LiveChatController::class, 'post'])->name('livechat.post');

}); 