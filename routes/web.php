<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Item;
use App\Http\Controllers\ItemController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('veri')->middleware('auth')->group(function (){
    Route::get('/veriler',[HomeController::class, 'veriler'])->name('veriler');
    
Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('item.delete');
Route::get('/items/ekle', [ItemController::class, 'ekleForm'])->name('item.ekle.form');
Route::post('/items/ekle', [ItemController::class, 'ekle'])->name('item.ekle');
Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('item.edit');
Route::put('/items/{id}', [ItemController::class, 'update'])->name('item.update');
});
