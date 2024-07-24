<?php

use App\Http\Controllers\Admin\JournalBoardMemberController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use App\Services\CustomService;
use App\Services\SubmissionService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return "Cache cleared successfully!";
});

Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/submit-login', [AuthController::class, 'SubmitLogin'])->name('submit.login');


Route::get('/verify-email/{token}', [AuthController::class, 'VerifyEmail'])->name('verify.email');
Route::get('/verification-email', function () {
    return Auth::check() ? redirect('home') : view('user.auth.verification');
})->name('after.verify.email');
Route::get('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/submit-register', [AuthController::class, 'SubmitRegister'])->name('submit.register');
Route::post('/resend-verify-email', [AuthController::class, 'resend'])->name('resend.verify.email');

Route::middleware('check.user.auth')->group(function () {
    Route::view('/Registration-Complete', 'user.pages.after-register')->name('after.register');
    Route::get('/user-logout', [AuthController::class, 'logout'])->name('user.logout');

    //submission route
    Route::get('/submit-your-article', [ArticleController::class, 'submitArticle'])->name('submit.article');
    Route::get('/our-submission', [SubmissionController::class, 'index'])->name('submission.index');
    Route::post('/submit-submission', [SubmissionController::class, 'store'])->name('submit.submission');
    Route::get('/view-submission/{id}', [SubmissionController::class, 'show'])->name('view.submission');
    Route::post('/update-submission-user/{id}', [SubmissionController::class, 'update'])->name('update.submission.user');
    Route::get('/send-apc-mail/{id}', [SubmissionService::class, 'sendPaypalEmail'])->name('send.paypal.mail');

    Route::post('/post-pre-publication', [SubmissionService::class, 'postPrePublication'])->name('post.pre.publication');
    Route::get('/user-profile', [ProfileController::class, 'index'])->name('user.own.profile');
});
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
Route::post('/update-profile', [ProfileController::class, 'update'])->name('update.profile');
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
Route::post('/submit-contact', [MainController::class, 'submitContact'])->name('submit.contact');
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
Route::get('detail/{slug}', [MainController::class, 'blog_details'])->name('blog.detail');
// Route::get('/blogs', [MainController::class, 'blogs']);
Route::get('/user-information', [MainController::class, 'user_information']);
Route::get('/dashboard', [MainController::class, 'dashboard']);
Route::get('/search', [MainController::class, 'search'])->name('search');

Route::get('/forum', [ThreadController::class, 'index'])->name('thread.index');
Route::post('/thread-store', [ThreadController::class, 'store'])->name('thread.store');
Route::get('/thread-detail/{thread}', [ThreadController::class, 'show'])->name('thread.detail');



Route::get('/comments', [CommentController::class, 'index'])->name('get.comments');
Route::post('/comments', [CommentController::class, 'store'])->name('post.comments');
Route::post('/comments/reply', [CommentController::class, 'replyStore'])->name('post.reply');




Route::post('/form-submission', [MainController::class, 'sendEmail'])->name('send.email');
Route::post('/article-submission', [MainController::class, 'sendArticleEmail'])->name('send.articlemail');
Route::get('/publication/journal/{id}/{code}', [MainController::class, 'article']);
Route::view('/thank-you', 'user.pages.thanku')->name('thank.u');
Route::get('/journal/{journal_name}/join-board', [MainController::class, 'join_board']);
Route::post('/joinboard', [MainController::class, 'sendBoardEmail'])->name('send.joinboard');
Route::get('/submit-manuscripts', [SubmissionController::class, 'create'])->name('submit.manuscript');

Route::get('/get-download-count', [CustomService::class, 'getDownloadCount'])->name('get.download.count');
Route::get('/increase-download-count', [CustomService::class, 'increaseDownloadCount'])->name('increase.download.count');

Route::get('/lp', [ArticleController::class, 'lpView']);
Route::post('/submit-lp', [ArticleController::class, 'submitLp'])->name('submit.lp');

Route::get('/search-article', [CustomService::class, 'searchArticle'])->name('search.article');


Route::get('/article/{id}/increment-view', [ArticleController::class, 'incrementView'])->name('article.incrementView');
Route::get('/editorial/member/update-order', [JournalBoardMemberController::class, 'updateOrder'])->name('editorial.member.updateOrder');

Route::get('articles/{id}/citation/bib', [CustomService::class, 'downloadBibCitation'])->name('articles.citation.bib');
Route::get('articles/{id}/citation/ris', [CustomService::class, 'downloadRisCitation'])->name('articles.citation.ris');
Route::get('articles/{article}/citation/txt', [CustomService::class, 'downloadTxt'])->name('articles.citation.txt');

Route::get('/ip', [CustomService::class, 'createLoginHistory']);
Route::get('/verify-lead/{id}', [CustomService::class, 'verifyLead'])->name('verify.lead');

Route::post('/subscribe-email', [CustomService::class, 'subscribeEmail']);
Route::get('/news-verify-email/{id}', [CustomService::class, 'subscribeEmailVerification'])->name('news.verify.email');


Route::view('/blogs', 'user.pages.blogs', ['blogs' =>  Blog::where('category', 'blog')->paginate(10)]);
Route::view('/research-study', 'user.pages.research-study', ['blogs' =>  Blog::where('category', 'researh study')->paginate(10)]);
Route::view('/case-study', 'user.pages.case-study', ['blogs' =>  Blog::where('category', 'case study')->paginate(10)]);

require __DIR__ . '/admin.php';
require __DIR__ . '/boardmember.php';
