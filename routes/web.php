<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EdulebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EdulebController::class, 'home'])->name('home');
Route::get('/home2', [EdulebController::class, 'home2'])->name('home2');
Route::get('/about', [EdulebController::class, 'about'])->name('about');
Route::get('/course', [EdulebController::class, 'course'])->name('course');
Route::get('/course/{course}', [EdulebController::class, 'courseDetails'])->name('course.details');
Route::get('/instructor', [EdulebController::class, 'instructor'])->name('instructor');
Route::get('/instructor/{instructor}', [EdulebController::class, 'instructorDetails'])->name('instructor.details');
Route::get('/pricing', [EdulebController::class, 'pricing'])->name('pricing');
Route::get('/faq', [EdulebController::class, 'faq'])->name('faq');
Route::get('/blog', [EdulebController::class, 'blog'])->name('blog');
Route::get('/blog/{post}', [EdulebController::class, 'blogSingle'])->name('blog.single');
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

require __DIR__.'/auth.php';
