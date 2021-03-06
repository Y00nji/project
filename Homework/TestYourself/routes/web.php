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

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('auth.login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('logout', 'LogoutController@perform')->name('logout.perform');
 });
Route::get('/home', [App\Http\Controllers\ВыборкаБазыController::class, 'ВыборкаБазы']);
// Route::get('/', [App\Http\Controllers\ВыборкаБазыController::class, 'ВыборкаБазы']);

Route::get('update', [App\Http\Controllers\HomeController::class, 'update'])->name('update_абитуриент');



