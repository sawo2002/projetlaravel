<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApprenantController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/ajouter', [ApprenantController::class, 'create' ]) ;
    Route::post('/store', [ApprenantController::class, 'store' ]) ;
    Route::get('/modifier/{id}', [ApprenantController::class, 'edit' ]) ;
    Route::post('/update', [ApprenantController::class, 'update' ]) ;
    Route::get('/supprimer/{id}', [ApprenantController::class, 'show' ]) ;
});
Route::get('/dashboard', [ApprenantController::class, 'index' ]) ;
Route::get('/detail/{id}', [ApprenantController::class, 'detail' ])->name('detail');
require __DIR__.'/auth.php';
