<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::middleware(['auth'])->group(function () {
//     Route::get('/approval',  [App\Http\Controllers\HomeController::class, 'approval'])->name('approval');
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });


// Route::middleware(['auth'])->group(function () {
//     Route::get('/approval', [App\Http\Controllers\HomeController::class, 'approval'])->name('approval');

//     Route::middleware(['approved'])->group(function () {
//         Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     });
// });


Route::middleware(['auth'])->group(function () {
    Route::get('/approval',  [App\Http\Controllers\HomeController::class,'approval'])->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', [App\Http\Controllers\UserController::class,'index'])->name('admin.users.index');
        Route::get('/users/{user_id}/approve', [App\Http\Controllers\UserController::class,'approve'])->name('admin.users.approve');
    });
});
