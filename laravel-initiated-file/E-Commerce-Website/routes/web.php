<?php

use App\Http\Controllers\ItemsController;
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
    return view('E-Commerce-Webpage');
});

Route::prefix('items')->group(function () {

    Route::get('/', [ItemsController::class, 'index'])->name('indexitem');


    Route::post('/', [ItemsController::class, 'store'])->name('storeitem');


    Route::get('create', [ItemsController::class, 'create'])->name('createitem');


    Route::get('{item}/edit', [ItemsController::class, 'edit'])->name('edititem');


    Route::put('{item}', [ItemsController::class, 'update'])->name('updateitem');


    Route::delete('{item}', [ItemsController::class, 'destroy'])->name('deleteitem');


    Route::post('/store-image/{item_id}', [ItemsController::class, 'uploadImage'])->name('uploadImage');
});
