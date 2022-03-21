<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Auth\Events\Verified;

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

/*Route::get('/anar', function () {
    return view('welcome');

});*/
/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/


/*Route::group([ 'prefix' => '/{locale}/user','middleware' => ['localization', 'auth', 'verified'], 'where' => ['locale', '[a-zA-Z]{2}'] ],function ($locale) {
    Route::get('/profile', [ProfileController::class, 'index'])->name('home');
})->name('');*/

Route::get('/',function ()
{
    return redirect(app()->getlocale());
});
Route::group([
    'prefix' => '{locale}',
    'middleware' => 'localization',
    'where' => ['locale', '[a-zA-Z]{2}']
],function ($locale) {
    Auth::routes();
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('product', ProductController::class);
});

Route::prefix('{locale}/user')->middleware(['auth', 'verified', 'localization'])->name('user.')->group(function($locale){
    Route::get('profile',ProfileController::class)->name('profile');
});


