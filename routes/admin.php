<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JournalBoardMemberController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\JournalVolumeController;
use Illuminate\Support\Facades\Route;



Route::prefix('/admin')->group(function () {

    Route::redirect('/', '/login');
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/submit-login', [AuthController::class, 'Submitlogin'])->name('admin.submit.login');

    //journals
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


    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});