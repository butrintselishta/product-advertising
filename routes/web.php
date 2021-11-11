<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/', function () {
//     app()->setLocale('al');
//     return view('index');
// });
// Route::post('lang/{locale}', [HomeController::class, 'lang'])->name('lang');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Auth::routes();

    Route::get('/', [HomeController::class, 'index'])->name('index');

    /* PRODUCTS */
    Route::prefix('produktet')->group(function () {
        Route::get('/{menu?}/{product?}', [HomeController::class, 'products'])->name('products');
    });

    /* CONTACT */
    Route::prefix('kontakti')->group(function () {
        Route::get('/', [HomeController::class, 'contact'])->name('contact');
    });

    Route::put('/store', [HomeController::class, 'store'])->name('storemedia');
    Route::get('/get', [HomeController::class, 'get'])->name('get');
});
