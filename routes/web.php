<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;
use App\Models\Journal;
use App\Models\Submission;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('index'))->name('home');
Route::view('/email', 'email');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('/update-profile', [ProfileController::class, 'update'])->name('update.profile');
    Route::get('/our-submission', [SubmissionController::class, 'index'])->name('submission.index');
    Route::get('/guideline-page', fn () => view('submission.guideline'))->name('submision.guideline');
    Route::get('/create-submission', [SubmissionController::class, 'create'])->name('submission.create');
    Route::post('/submit-submission', [SubmissionController::class, 'store'])->name('submission.store');
    Route::get('/view-submission', [SubmissionController::class, 'show'])->name('view.submission');
    Route::post('/update-submission', [SubmissionController::class, 'update'])->name('update.submission');
    Route::get('/Users', [UserController::class, 'index'])->name('user.index');
    Route::post('/user-store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user-edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user-update', [UserController::class, 'update'])->name('user.update');
    Route::get('/user-delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/review-requests', [ReviewerController::class, 'index'])->name('reviewer.index');
    Route::get('/approve-reviewer-request/{id}', [ReviewerController::class, 'update'])->name('reviewer.update');
});

Route::get('/review-request', [ReviewerController::class, 'create'])->name('reviewer.request');
Route::post('/submit-review-request', [ReviewerController::class, 'store'])->name('submit.reviewer.request');

Route::get('/journals', [PagesController::class, 'view'])->name('journal.index');






require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';