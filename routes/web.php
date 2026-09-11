<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EdulebController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EdulebController::class, 'home'])->name('home');
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap', [
        'urls' => [
            ['path' => '/', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['path' => '/about', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['path' => '/instructor', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['path' => '/faq', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['path' => '/blog', 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['path' => '/contact', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['path' => '/privacy-policy', 'changefreq' => 'yearly', 'priority' => '0.3'],
            ['path' => '/terms-and-conditions', 'changefreq' => 'yearly', 'priority' => '0.3'],
        ],
    ])->header('Content-Type', 'application/xml');
})->name('sitemap');
Route::get('/about', [EdulebController::class, 'about'])->name('about');
Route::get('/instructor', [EdulebController::class, 'instructor'])->name('instructor');
Route::get('/faq', [EdulebController::class, 'faq'])->name('faq');
Route::get('/privacy-policy', [EdulebController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [EdulebController::class, 'termsAndConditions'])->name('terms-and-conditions');
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
