<?php

use App\Http\Controllers\contentControllers;
use App\Http\Controllers\ProfileController;
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
    return view('homeRK');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/post', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('postAdmin');
Route::get('/add', function () {
    return view('dashboard.addPost');
})->middleware(['auth', 'verified'])->name('addAdmin');

// CRUD Content
// Route::post('/add', function () {
//     redirect(view('dashboard.dashboard'));
// })->middleware(['auth', 'verified'])->name('addContent');

Route::post('/oke', [contentControllers::class, 'store'])->name('addContent');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
