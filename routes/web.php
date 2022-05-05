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
Route::resource('/registration', \App\Http\Controllers\authController::class);
Route::middleware('blocked')->group(
    function () {
Route::get('/', function () {return view('welcome');})->name('welcome');

Route::middleware(
    ['auth:sanctum', config('jetstream.auth_session'), 'verified','role:normal']
)->group(function () {
    Route::get('/dashboard', function () {return view('client.dashboard');})->name('dashboard');
    Route::get('/statistics', function () {return view('client.statistics');})->name('statistics');
    Route::get('/groups/all', function () {return view('client.groups.all');})->name('groups.all');
    Route::get('user/groups/free', function () {return view('client.groups.all');})->name('groups.free');
    Route::get('user/groups/premium', function () {return view('client.groups.all');})->name('groups.premium');
});
        require_once __DIR__ . '/jetstream.php';
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
        });
        Route::view('/', 'admin.dashboard.default')->name('dashboard');
        Route::resource('users', \App\Http\Controllers\admin\UserController::class);
        Route::resource('tickets',  \App\Http\Controllers\admin\TicketController::class);
        Route::resource('payments',  \App\Http\Controllers\admin\PaymentController::class);
        Route::resource('subscriptions',  \App\Http\Controllers\admin\SubscriptionController::class);

    }
);

