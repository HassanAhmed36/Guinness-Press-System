<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Services\SubmissionService;
use Illuminate\Support\Facades\Route;

Route::prefix('/board-member')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('board.member.login');
    Route::post('/submit-login', [AuthController::class, 'Submitlogin'])->name('submit.admin.board.member');
    Route::middleware('check.board.member.auth')->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('board.member.dashboard');
        Route::get('/assign-peer-review', [SubmissionController::class, 'PeerReview'])->name('assign.peer.review');
        Route::post('/submit-peer-review-feedback', [SubmissionService::class, 'submitPeerReviewFeedback'])->name('submit.peer.review.feedback');
       
    });
});
