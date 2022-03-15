<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Auth::routes();
/*Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ge', 'tr', 'ru'])) {
        App::setLocale("en");
    }
    else{
        App::setLocale($locale);
    }
    Route::get('/', [HomeController::class, 'index'])->name('home');

});*/
Route::group([ 'prefix' => '/{locale}', 'where' => ['locale', '[a-zA-Z]{2}'] ],function ($locale) {
    if (! in_array($locale, ['en', 'ge', 'tr', 'ru'])) {
        App::setLocale("en");
    }
    else{
        App::setLocale($locale);
    }
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
