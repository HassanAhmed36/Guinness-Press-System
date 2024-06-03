<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DoiGeneratorController;
use App\Http\Controllers\Admin\JournalBoardMemberController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\JournalVolumeController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Http\Controllers\Admin\VolumeIssueController;
use App\Services\CustomService;
use Illuminate\Support\Facades\Route;



Route::prefix('/admin')->group(function () {
    Route::redirect('/', '/login');
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/submit-login', [AuthController::class, 'Submitlogin'])->name('admin.submit.login');
    //journals

    Route::middleware('check.dashboard.auth')->group(function () {

        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
        Route::get('/journals', [JournalController::class, 'index'])->name('admin.journal.index');
        Route::get('/create-journals', [JournalController::class, 'create'])->name('admin.journal.create');
        Route::post('/store-journal', [JournalController::class, 'store'])->name('admin.journal.store');
        Route::get('/edit-journal/{id}', [JournalController::class, 'edit'])->name('admin.journal.edit');
        Route::post('/update-journal/{id}', [JournalController::class, 'update'])->name('admin.journal.update');
        Route::get('/delete-journal/{id}', [JournalController::class, 'destroy'])->name('admin.journal.delete');

        //members
        Route::get('/editorial-member', [JournalBoardMemberController::class, 'index'])->name('editorial.member.index');
        Route::post('/store-editorial-member', [JournalBoardMemberController::class, 'store'])->name('editorial.member.store');
        Route::get('/edit-editorial-member', [JournalBoardMemberController::class, 'edit'])->name('editorial.member.edit');
        Route::post('/update-editorial-member/{id}', [JournalBoardMemberController::class, 'update'])->name('editorial.member.update');
        Route::get('/delete-editorial-member/{id}', [JournalBoardMemberController::class, 'destroy'])->name('editorial.member.delete');

        //volumes
        Route::get('/volume-index', [JournalVolumeController::class, 'index'])->name('admin.volume.index');
        Route::post('/store-volume', [JournalVolumeController::class, 'store'])->name('admin.volume.store');
        Route::get('/edit-volume', [JournalVolumeController::class, 'edit'])->name('admin.volume.edit');
        Route::post('/update-volume/{id}', [JournalVolumeController::class, 'update'])->name('admin.volume.update');
        Route::get('/delete-volume/{id}', [JournalVolumeController::class, 'destroy'])->name('admin.volume.destroy');

        //Issue
        Route::get('/issues', [VolumeIssueController::class, 'index'])->name('admin.issue.index');
        Route::post('/issues-store', [VolumeIssueController::class, 'store'])->name('admin.issue.store');
        Route::get('/issues-edit', [VolumeIssueController::class, 'edit'])->name('admin.issue.edit');
        Route::post('/issues-update/{id}', [VolumeIssueController::class, 'update'])->name('admin.issue.update');
        Route::get('/issues-delete/{id}', [VolumeIssueController::class, 'destroy'])->name('admin.issue.delete');

        //Articles
        Route::get('/articles', [ArticleController::class, 'index'])->name('admin.article.index');
        Route::get('/article-create', [ArticleController::class, 'create'])->name('admin.article.create');
        Route::post('/article-store', [ArticleController::class, 'store'])->name('admin.article.store');
        Route::get('/article-edit/{id}', [ArticleController::class, 'edit'])->name('admin.article.edit');
        Route::post('/article-update/{id}', [ArticleController::class, 'update'])->name('admin.article.update');
        Route::get('/article-delete/{id}', [ArticleController::class, 'destroy'])->name('admin.article.delete');

        //Extra
        Route::get('/fetch-volumes', [CustomService::class, 'fetchVolumes'])->name('volumes.fetch');
        Route::get('/fetch-issue', [CustomService::class, 'fetchIssue'])->name('issue.fetch');

        //doi dependent select box
        Route::get('/fetch-volumes-dio', [CustomService::class, 'fetchVolumesdoi'])->name('volumes.fetch.dio');
        Route::get('/fetch-issue-dio', [CustomService::class, 'fetchIssuedoi'])->name('issue.fetch.dio');

        //DOI Generator
        Route::get('/DOI-Generator', [DoiGeneratorController::class, 'index'])->name('doi.index');
        Route::post('/DOI-Generator-Save', [DoiGeneratorController::class, 'store'])->name('doi.store');


        Route::get('/submissions', [SubmissionController::class, 'index'])->name('admin.submission.index');

        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});