<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
// Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
// Moderator
use App\Http\Controllers\Moderator\DashboardController as ModeratorDashboardController;
use App\Http\Controllers\Moderator\QuestionController as ModeratorQuestionController;
// Host
use App\Http\Controllers\Host\DashboardController as HostDashboardController;
use App\Http\Controllers\Host\QuestionController as HostQuestionController;

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
Route::get('question', [FrontEndController::class, 'question'])->name('question');
Route::post('submit-question', [FrontEndController::class, 'submitQuestion'])->name('submit-question');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('user-roles', [DashboardController::class, 'userRoles'])->name('user-roles');
    Route::resource('users', UserController::class);
    // 
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'moderator'])->group(function () {
    Route::get('moderator-dashboard', [ModeratorDashboardController::class, 'index'])->name('moderator-dashboard');
    Route::post('moderator-sidebar-status', [ModeratorDashboardController::class, 'moderatorSidebarStatus'])->name('moderator-sidebar-status');
    Route::get('unanswered-question', [ModeratorQuestionController::class, 'unansweredQuestion'])->name('unanswered-question');
    Route::post('assign-question', [ModeratorQuestionController::class, 'assignQuestion'])->name('assign-question');
    Route::get('assigned-question', [ModeratorQuestionController::class, 'assignedQuestion'])->name('assigned-question');
    Route::get('answered-question', [ModeratorQuestionController::class, 'answeredQuestion'])->name('answered-question');
});

Route::middleware(['auth', 'host'])->group(function () {
    Route::get('dashboard', [HostDashboardController::class, 'index'])->name('dashboard');
    Route::post('host-sidebar-status', [HostDashboardController::class, 'hostSidebarStatus'])->name('host-sidebar-status');
    Route::get('question-unanswered', [HostQuestionController::class, 'questionUnanswered'])->name('question-unanswered');
    Route::post('question-answered', [HostQuestionController::class, 'questionAanswered'])->name('question-answered');
    Route::get('question-answered-all', [HostQuestionController::class, 'questionAansweredAll'])->name('question-answered-all');
});

require __DIR__ . '/auth.php';
