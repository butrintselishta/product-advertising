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

Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Auth::routes();

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/products', [HomeController::class, 'products'])->name('products');
});
