<?php

use App\Http\Controllers\CustomerController;
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
    return view('welcome');
});
Route::get('/index',[CustomerController::class,'index'])->name('index');
Route::get('/create',[CustomerController::class,'create'])->name('create');
Route::post('/create',[CustomerController::class,'store'])->name('store');
Route::get('/index/{id}/show',[CustomerController::class,'show'])->name('show');
Route::get('/index/{id}/edit',[CustomerController::class,'edit'])->name('edit');
Route::post('/index/{id}/edit',[CustomerController::class,'update'])->name('update');
Route::get('/index/{id}/destroy',[CustomerController::class,'destroy'])->name('destroy');
