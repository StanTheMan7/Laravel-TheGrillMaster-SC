<?php

use App\Http\Controllers\BackHomeController;
use App\Http\Controllers\BookTableController;
use App\Http\Controllers\CarrousselController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HappyCustomerController;
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
Route::get('/backoffices', [BackHomeController::class, 'index'])->name('backoffice');
// Route::resource('/section',[CarrousselController::class])->middleware(['auth', 'admin']);
// Route::resource('/abouts', [WarmWelcomeController::class])->middleware(['auth', 'admin']);
// Route::resource('/loveSteaks', [LoveSteakController::class])->middleware(['auth', 'admin']);
// Route::resource('/happys', [HappyCustomerController::class])->middleware(['auth', 'admin']);
// Route::resource('/books', [BookTableController::class])->middleware(['auth', 'admin']);
// Route::resource('/portfolios', [PortfolioController::class])->middleware(['auth', 'admin']);
// Route::resource('/titles', [TitreController::class])->middleware(['auth', 'admin']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
