<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('welcome');
});

// is Login
Route::middleware(['auth:sanctum', 'verified'])
    ->group(function()
    {
        Route::get('dashboard', [Controller::class, 'tes'])->name('dashboard');
        Route::get('dashboard/{varr}', [Controller::class, 'tes2'])->name('dashboard2');
    });
