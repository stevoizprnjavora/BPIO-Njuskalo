<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/types', 'App\\Http\\Controllers\\TypeController@index')
    ->name('types.index');
Route::get('addresses', 'App\\Http\\Controllers\\AddressController@index')
    ->name('addresses.index');
Route::get('manufacturers', 'App\\Http\\Controllers\\ManufacturerController@index')
    ->name('manufacturers.index');
Route::get('numbers', 'App\\Http\\Controllers\\NumberController@index')
    ->name('numbers.index');
Route::get('users', 'App\\Http\\Controllers\\UserController@index')
    ->name('users.index');
