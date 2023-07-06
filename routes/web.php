<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('/user-roles', [DashboardController::class, 'userRoles'])->name('user-roles');
    Route::resource('users', UserController::class);
    Route::resource('designations', DesignationController::class);
    // 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
