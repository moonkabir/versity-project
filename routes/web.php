<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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
//----------------- front-end route-----------------
Route::get('/', [FrontController::class, 'home_view']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/administration', [FrontController::class, 'administration']);
Route::get('/academic', [FrontController::class, 'academic']);

//----------------- back-end route-----------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
