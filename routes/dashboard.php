<?php

use App\Http\Controllers\admin\AdminController;
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
//Route::group(['prefix' => LaravelLocalization::setLocale(),
//    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
//    function () {
//        Route::resource('/admin', AdminController::class );
//    });


//
////Route::get('/admin', AdminController::class , 'index' );
Route::resource('/admin', AdminController::class );
//
////Route::get('/dashboard', DashboardController::class , 'index');
