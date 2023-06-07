<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnswerController;

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/editprofil', function () {
    return view('user.edit_profil');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::post('/home/store_question', [HomeController::class, 'store_question']);
Route::get('/home/search', [HomeController::class, 'search'])->name('search');
Route::get('/home/filter', [HomeController::class, 'filter'])->name('filter');

Route::get('/home/answer/{question}/show', [AnswerController::class, 'show'])->name('show.answer');
Route::get('/home/answer/{question}/create', [AnswerController::class, 'create_answer'])->name('answer.create');
Route::post('/home/answer/store', [AnswerController::class, 'store_answer'])->name('answer.store');
Route::post('/home/answer/store_comment', [AnswerController::class, 'store_comment'])->name('comment.store');
Route::post('/home/answer/store_reply', [AnswerController::class, 'store_reply'])->name('reply.store');
Route::post('/home/answer/store_like', [AnswerController::class, 'store_like'])->name('answer.like');
Route::delete('/home/answer/{answer}/unlike', [AnswerController::class, 'delete_like'])->name('delete.like');

Route::middleware('auth')->group(function () {
    Route::get('/home/answerprofile/{user}', [ProfileController::class, 'index'])->name('profile.user');
    Route::get('/home/questionprofile/{user}', [ProfileController::class, 'show'])->name('question.user');
    Route::get('/home/profile/{user}/edit', [ProfileController::class, 'edit_profile'])->name('edit.profile');
    Route::put('/home/profile/{user}', [ProfileController::class, 'update_profile'])->name('update.profile');
    Route::post('/home/profile/follow', [ProfileController::class, 'follow'])->name('follow');
    Route::delete('/home/profile/{user}/unfollow', [ProfileController::class, 'unfollow'])->name('unfollow');
    Route::get('/home/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/home/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/home/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/admin/akun/{id}/edit', [AdminController::class, 'edit_akun'])->name('akun.edit');
Route::put('/admin/akun/{id}', [AdminController::class, 'update_akun'])->name('akun.update');
Route::delete('/admin/akun/{id}', [AdminController::class, 'delete_akun'])->name('akun.delete');
Route::get('/admin/akun', [AdminController::class, 'show_akun'])->name('akun.show');

Route::get('/admin/create_subject', [AdminController::class, 'create_subject'])->name('subject.create');
Route::post('/admin/store_subject', [AdminController::class, 'store_subject'])->name('subject.store');
Route::get('/admin/subject/{id}/edit', [AdminController::class, 'edit_subject'])->name('subject.edit');
Route::put('/admin/subject/{id}', [AdminController::class, 'update_subject'])->name('subject.update');
Route::delete('/admin/subject/{id}', [AdminController::class, 'delete_subject'])->name('subject.delete');
Route::get('/admin/subject', [AdminController::class, 'show_subject'])->name('subject.show');

Route::delete('/admin/question/{id}', [AdminController::class, 'delete_question'])->name('question.delete');
Route::get('/admin/question', [AdminController::class, 'show_question'])->name('question.show');

Route::delete('/admin/answer/{id}', [AdminController::class, 'delete_answer'])->name('answer.delete');
Route::get('/admin/answer', [AdminController::class, 'show_answer'])->name('answer.show');

Route::delete('/admin/reply/{id}', [AdminController::class, 'delete_reply'])->name('reply.delete');
Route::get('/admin/reply', [AdminController::class, 'show_reply'])->name('reply.show');

Route::delete('/admin/comment/{id}', [AdminController::class, 'delete_comment'])->name('comment.delete');
Route::get('/admin/comment', [AdminController::class, 'show_comment'])->name('comment.show');
