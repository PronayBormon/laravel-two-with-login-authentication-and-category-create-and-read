<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth','isAdmin')->group( function()
{
    Route::get('/dashboard',  [App\Http\Controllers\Admin\DashboardController::class, 'index'] );

    // check option here  user for education perpus
    Route::get('/check',  [App\Http\Controllers\Admin\CheckController::class, 'index'] );    
    Route::post('/check',  [App\Http\Controllers\Admin\CheckController::class, 'create']);

    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'] );
    Route::get('/add_category', [App\Http\Controllers\Admin\CategoryController::class, 'create'] );

    
    Route::post('/add_category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    
});
