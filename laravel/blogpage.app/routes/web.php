<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::prefix('posts')->group(function () {
    // Route::resource('',PostController::class);
    Route::get('/', [PostController::class, 'index'])->name('indexpost');

    Route::post('/', [PostController::class, 'store'])->name('storepost');

    Route::get('/create', [PostController::class, 'create'])->name('createpost');


    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('editpost');

    Route::put('/{post}', [PostController::class, 'update'])->name('updatepost');


    Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroypost');
    //             / | \        
    //               |  
    //               |  
    //              {id} when using id to destroy look into post controller's destroy portion

    // Upload image
    //     Route::get('/add-image' , [ImageUploadController::class, 'addImage'])->name('upload.image');


    // // Store image
    Route::post('/store-image/{post_id}', [PostController::class, 'uploadImage'])->name('uploadImage');


    // // View image
    //     Route::get('/view-image' , [ImageUploadController::class, 'viewImage'])->name('view.image');


});
