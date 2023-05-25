<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function () {
                return view('/layout_admin/main');}
              );
    Route::get('/teste', function () {
                return view('/layout_admin/teste');}
              );
})->middleware("auth");



Route::get('/loja', function () {
    return view('/layout_loja/main');
});

Route::get('/about', function () {
    return view('/layout_loja/about');
});

Route::get('/services', function () {
    return view('/layout_loja/services');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
