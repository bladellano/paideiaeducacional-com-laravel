<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'home'])->name('site.home');

Route::get('/evento/{slug}', [SiteController::class, 'event'])->name('site.events');
Route::get('/banner/{slug}', [SiteController::class, 'banner'])->name('site.banners');
Route::get('/video/{slug}', [SiteController::class, 'video'])->name('site.videos');

Route::get('/{slug}', [SiteController::class, 'page'])
->where('slug', '^(?!admin|login).*|^(admin|login)?$') // Permite vazias, 'admin' ou 'login'
->name('site.pages');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('events', EventController::class);
        Route::resource('pages', PageController::class);
        Route::resource('banners', BannerController::class);
        Route::resource('videos', VideoController::class);
    });
});
