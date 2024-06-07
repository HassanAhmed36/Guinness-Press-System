<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;
use App\Models\Journal;
use App\Models\Submission;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    return 'Cache cleared successfully.';
});

Route::get('/optimize', function () {
    Artisan::call('optimize');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('queue:restart');
    return 'Application optimized successfully.';
});


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
Route::post('/update-profile', [ProfileController::class, 'update'])->name('update.profile');
Route::get('/our-submission', [SubmissionController::class, 'index'])->name('submission.index');
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
Route::get('/review-request', [ReviewerController::class, 'create'])->name('reviewer.request');
Route::post('/submit-review-request', [ReviewerController::class, 'store'])->name('submit.reviewer.request');


//Pages Route

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/home', [MainController::class, 'index']);
Route::get('/index', [MainController::class, 'index']);
Route::get('/main', [MainController::class, 'index']);
// Route::get('/journal', [MainController::class, 'journal']);
Route::get('/journals', [MainController::class, 'journal']);
Route::get('/article', [MainController::class, 'journal']);
Route::get('/publication/journal/{journal_name}', [MainController::class, 'journal_details']);
Route::get('/publication/journal/{id}/{issue}/{issue_no}', [MainController::class, 'journal_issue']);
Route::get('/journal/{journal_name}/editorial-board', [MainController::class, 'editorial_board']);
Route::get('/article-details', [MainController::class, 'article_details']);
Route::get('/issue-details', [MainController::class, 'issue_details']);
Route::get('/download-citation', [MainController::class, 'download_citation']);
Route::view('/about-us', 'user.pages.about');
Route::view('/disclaimer', 'user.pages.disclaimer');
Route::view('/mission-vision', 'user.pages.mission-vision');
Route::view('/publication-ethics-statement', 'user.pages.publication-ethics-statement');
Route::view('/peer-review-process', 'user.pages.peer-review-process');
Route::view('/archival-practices', 'user.pages.archival-practices');
Route::get('/article-processing-charges', [MainController::class, 'article_processing_charges']);
Route::view('/repository-policy', 'user.pages.repository-policy');
Route::view('/services', 'user.pages.services');
Route::view('/benefits-of-being-a-reviewer', 'user.pages.benefits_of_being_a_reviewer');
Route::view('/reviewer-guidelines', 'user.pages.reviewer-guideline');
Route::view('/contact-us', 'user.pages.contact-us');
Route::view('/librarian-resource-center', 'user.pages.librarian-resource-center');
Route::view('/authors-guidelines', 'user.pages.authors-guidelines');
Route::view('/crossmark-policy', 'user.pages.crossmark-policy');
Route::view('/article-correction', 'user.pages.articles-correction');
Route::view('/article-retraction', 'user.pages.article-retraction');
Route::view('/publication-procedure', 'user.pages.publication-procedure');
Route::view('/policies-and-statements', 'user.pages.policies-and-statements');
Route::view('/copyright-agreement', 'user.pages.copyright-agreement');
Route::view('/publication-fees', 'user.pages.publication-fees');
Route::get('/refund-policy', [MainController::class, 'refund_policy']);
Route::get('/payment-options', [MainController::class, 'payment_options']);
Route::get('/blogs', [MainController::class, 'blogs']);
Route::get('/user-information', [MainController::class, 'user_information']);
Route::get('/dashboard', [MainController::class, 'dashboard']);
Route::get('/search', [MainController::class, 'search'])->name('search');
Route::view('/submit-your-article', 'user.pages.submit_articles');

Route::post('/form-submission', [MainController::class, 'sendEmail'])->name('send.email');
Route::post('/article-submission', [MainController::class, 'sendArticleEmail'])->name('send.articlemail');
Route::get('/publication/journal/{id}/{code}', [MainController::class, 'article']);
Route::view('/thank-you', 'user.pages.thanku');
Route::get('/journal/{journal_name}/join-board', [MainController::class, 'join_board']);
Route::post('/joinboard', [MainController::class, 'sendBoardEmail'])->name('send.joinboard');
Route::get('/submit-manuscripts', [SubmissionController::class, 'create'])->name('submit.manuscript');
Route::get('/login', [AuthController::class, 'loginAfterSubmission'])->name('login.after.submission');
Route::post('/submit-login', [AuthController::class, 'submitLoginAfterSubmission'])->name('submit.login.after.submission');
Route::get('/verify-email/{token}', [AuthController::class, 'VerifyEmail'])->name('verify.email');
Route::get('/verification-email', function () {
    return Auth::check() ? redirect('home') : view('user.auth.verification');
})->name('after.verify.email');
Route::get('/login-password', [AuthController::class, 'VerifyEmail'])->name('login.password');
Route::post('/submit-login-password', [AuthController::class, 'submitLoginAfterSubmissionPassword'])->name('submit.login.after.submission.password');

Route::get('/user-login', [AuthController::class, 'login'])->name('user.login');
Route::post('/submit-user-login', [AuthController::class, 'SubmitLogin'])->name('submit.user.login');

Route::get('/user-logout', [AuthController::class, 'logout'])->name('user.logout');
Route::get('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/submit-register', [AuthController::class, 'SubmitRegister'])->name('submit.register');

Route::view('/test', 'mail.send-verification-mail');











require __DIR__ . '/admin.php';
