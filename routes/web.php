<?php

use App\Http\Controllers\BackHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Models\HappyCustomer;
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

Route::get('/', function () {
    return view('page.home');
});
Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('/backoffice', [BackHomeController::class, 'index'])->name('backoffice');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/homeback', [NavbarController::class, 'index'])->name('navbar');

require __DIR__.'/auth.php';
