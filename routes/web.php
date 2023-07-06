<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
// Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\UserController;
// Moderator
use App\Http\Controllers\Moderator\DashboardController as ModeratorDashboardController;
use App\Http\Controllers\Moderator\QuestionController as ModeratorQuestionController;
// Host
use App\Http\Controllers\Host\DashboardController as HostDashboardController;

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

Route::get('/', [FrontEndController::class, 'index']);
Route::post('submit-question', [FrontEndController::class, 'submitQuestion'])->name('submit-question');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('/user-roles', [DashboardController::class, 'userRoles'])->name('user-roles');
    Route::resource('users', UserController::class);
    Route::resource('designations', DesignationController::class);
    // 
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'moderator'])->group(function () {
    Route::get('/moderator-dashboard', [ModeratorDashboardController::class, 'index'])->name('moderator-dashboard');
    Route::get('/unanswered-question', [ModeratorQuestionController::class, 'unansweredQuestion'])->name('unanswered-question');
    Route::get('/answered-question', [ModeratorQuestionController::class, 'answeredQuestion'])->name('answered-question');
});

Route::middleware(['auth', 'host'])->group(function () {
    Route::get('/dashboard', [HostDashboardController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/auth.php';
