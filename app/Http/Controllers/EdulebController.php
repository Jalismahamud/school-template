<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EdulebController extends Controller
{
    public function home(): View
    {
        return view('eduleb.index', [
            'teachers' => Teacher::active()->ordered()->get(),
            'students' => Student::active()->ordered()->get(),
            'posts' => Blog::published()->latestFirst()->take(3)->get(),
        ]);
    }

    public function about(): View
    {
        return view('eduleb.about');
    }

    public function instructor(): View
    {
        return view('eduleb.instructor', [
            'teachers' => Teacher::active()->ordered()->get(),
        ]);
    }

    public function pricing(): View
    {
        return view('eduleb.pricing');
    }

    public function faq(): View
    {
        return view('eduleb.faq');
    }

    public function blog(): View
    {
        return view('eduleb.blog', [
            'posts' => Blog::published()->latestFirst()->paginate(9),
        ]);
    }

    public function blogSingle(Blog $blog): View
    {
        return view('eduleb.blog-single', [
            'post' => $blog,
            'recentPosts' => Blog::published()->where('id', '!=', $blog->id)->latestFirst()->take(5)->get(),
        ]);
    }

    public function contact(): View
    {
        return view('eduleb.contact');
    }

    public function contactSubmit(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        return redirect()->route('thank-you');
    }

    public function thankYou(): View
    {
        return view('eduleb.thank-you');
    }

    public function notFound(): View
    {
        return view('eduleb.404');
    }
}
