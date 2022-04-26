<?php

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
    return view('welcome');
});

Route::middleware(
    ['auth:sanctum', config('jetstream.auth_session'), 'verified']
)->group(function () {
    Route::get('/dash', function () {
        return view('client.dashboard');
    })->name('dashboard');
});
Route::group(
    [
        // 'middleware' => ['role:admin'],
        'prefix' => 'admin',
        'as' => 'admin.',
    ],
    function () {
        Route::group(['prefix' => 'sets'], function () {
            Route::resource('groups',  \App\Http\Controllers\admin\GroupController::class);
            Route::get('overview', [\App\Http\Controllers\admin\GroupController::class, 'overview'])->name('groups.overview');
        });
        Route::view('/', 'admin.dashboard.default')->name('dashboard');
        Route::resource('users', \App\Http\Controllers\admin\UserController::class);
        Route::resource('tickets',  \App\Http\Controllers\admin\TicketController::class);
    }
);
