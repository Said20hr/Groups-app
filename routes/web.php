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
Route::get('/on', function () {
    return view('auth.onbroading');
});


Route::middleware(
    ['auth:sanctum', config('jetstream.auth_session'), 'verified']
)->group(function () {
    Route::get('/dashboard', function () {
        return view('client.dashboard');
    })->name('dashboard');
   

});
/* for test */
Route::get('/two-fact', function () {
    return view('auth.two-factor-challenge');
});
Route::get('/verif', function () {
    return view('auth.verify-email');
});
Route::get('/reset-pass', function () {
    return view('auth.reset-password');
});



Route::group(
    [
        'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified','role:admin'],
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
        Route::resource('payments',  \App\Http\Controllers\admin\PaymentController::class);
        Route::resource('subscriptions',  \App\Http\Controllers\admin\SubscriptionController::class);
    }
);
