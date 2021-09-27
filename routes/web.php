<?php

use App\Http\Controllers\BackHomeController;
use App\Http\Controllers\BookTableController;
use App\Http\Controllers\CarrousselController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HappyCustomerController;
use App\Http\Controllers\HeureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoveSteakController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\WarmWelcomeController;
use App\Http\Controllers\NavbarController;
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


Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('/backoffices', [BackHomeController::class, 'index'])->name('backoffice');
Route::resource('/navbars', NavbarController::class)->middleware(['auth', 'admin']);
Route::resource('/carousels', CarrousselController::class)->middleware(['auth', 'admin']);
Route::resource('/warmWelcomes', WarmWelcomeController::class)->middleware(['auth', 'admin']);
Route::resource('/loveSteaks', LoveSteakController::class)->middleware(['auth', 'admin']);
Route::resource('/happyCustomers', HappyCustomerController::class)->middleware(['auth', 'editeur']);
Route::resource('/bookTables', BookTableController::class)->middleware(['auth', 'admin']);
Route::resource('/heure', HeureController::class)->middleware(['auth', 'admin']);
Route::resource('/portfolios', PortfolioController::class)->middleware(['auth', 'admin']);
Route::resource('/titles', TitreController::class)->middleware(['auth', 'webmaster']);
Route::resource('/footers', FooterController::class)->middleware(['auth', 'admin']);

Route::get('/homeback', [NavbarController::class, 'index'])->name('navbar');

require __DIR__.'/auth.php';
