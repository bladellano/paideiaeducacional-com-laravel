<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('site.home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::prefix('events')->group(function () {
            Route::get('/', [EventController::class, 'index'])->name('events.index');
            Route::post('/store', [EventController::class, 'store'])->name('events.store');
            Route::get('/create', [EventController::class, 'create'])->name('events.create');
            Route::get('/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
            Route::put('/update/{event}', [EventController::class, 'update'])->name('events.update');
            Route::delete('/destroy/{event}', [EventController::class, 'destroy'])->name('events.destroy');
        });
        
    });
});
