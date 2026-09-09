<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EdulebController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EdulebController::class, 'home'])->name('home');
Route::get('/about', [EdulebController::class, 'about'])->name('about');
Route::get('/instructor', [EdulebController::class, 'instructor'])->name('instructor');
Route::get('/pricing', [EdulebController::class, 'pricing'])->name('pricing');
Route::get('/faq', [EdulebController::class, 'faq'])->name('faq');
Route::get('/blog', [EdulebController::class, 'blog'])->name('blog');
Route::get('/blog/{blog:slug}', [EdulebController::class, 'blogSingle'])->name('blog.single');
Route::get('/contact', [EdulebController::class, 'contact'])->name('contact');
Route::post('/contact', [EdulebController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/thank-you', [EdulebController::class, 'thankYou'])->name('thank-you');
Route::get('/404', [EdulebController::class, 'notFound'])->name('not-found');
Route::fallback([EdulebController::class, 'notFound']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('teachers', TeacherController::class)->except('show');
    Route::resource('students', StudentController::class)->except('show');
    Route::resource('blogs', BlogController::class)->except('show');
});

require __DIR__.'/auth.php';
