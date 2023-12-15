<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestimonialController;

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
Route::get('/noticia/{slug}', [SiteController::class, 'article'])->name('site.articles');
Route::get('/todas-as-noticias', [SiteController::class, 'allArticles'])->name('site.all-articles');

Route::get('/{slug}', [SiteController::class, 'page'])
->where('slug', '^(?!admin|login|register).*|^(admin|login|register)?$') // Permite vazias, 'admin' ou 'login'
->name('site.pages');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('events', EventController::class);
        Route::resource('pages', PageController::class);
        Route::resource('banners', BannerController::class);
        Route::resource('videos', VideoController::class);
        Route::resource('articles', ArticleController::class);
        Route::resource('testimonials', TestimonialController::class);
    });
});
