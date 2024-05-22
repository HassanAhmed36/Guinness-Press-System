<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('/email' , 'email');

Route::middleware('auth')->group(function () {
    Route::get('/profile' , [ProfileController::class , 'edit'])->name('profile');
    Route::post('/update-profile' , [ProfileController::class , 'update'])->name('update.profile');

    Route::get('/our-submission' ,[SubmissionController::class ,'index'])->name('submission.index');
    Route::get('/create-submission' ,[SubmissionController::class ,'create'])->name('submission.create');

});

require __DIR__.'/auth.php';