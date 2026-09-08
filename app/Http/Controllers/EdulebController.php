<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EdulebController extends Controller
{
    public function home(): View
    {
        return view('eduleb.index', [
            'courses' => $this->courses(),
            'instructors' => $this->instructors(),
            'posts' => $this->posts(),
        ]);
    }

    public function home2(): View
    {
        return view('eduleb.index2', [
            'courses' => $this->courses(),
            'instructors' => $this->instructors(),
            'posts' => $this->posts(),
        ]);
    }

    public function about(): View
    {
        return view('eduleb.about');
    }

    public function course(): View
    {
        return view('eduleb.course', [
            'courses' => $this->courses(),
        ]);
    }

    public function courseDetails(int $course): View
    {
        $course = collect($this->courses())->firstWhere('id', $course)
            ?? $this->courses()[0];

        return view('eduleb.course-details', [
            'course' => $course,
        ]);
    }

    public function instructor(): View
    {
        return view('eduleb.instructor', [
            'instructors' => $this->instructors(),
        ]);
    }

    public function instructorDetails(int $instructor): View
    {
        $instructor = collect($this->instructors())->firstWhere('id', $instructor)
            ?? $this->instructors()[0];

        return view('eduleb.instructor-details', [
            'instructor' => $instructor,
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
            'posts' => $this->posts(),
        ]);
    }

    public function blogSingle(int $post): View
    {
        $post = collect($this->posts())->firstWhere('id', $post)
            ?? $this->posts()[0];

        return view('eduleb.blog-single', [
            'post' => $post,
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

    private function courses(): array
    {
        return [
            ['id' => 1, 'title' => 'Complete User fundamentals beginners to advanced', 'category' => 'Education', 'image' => 'course/1.png', 'lessons' => 12, 'duration' => '2 Hrs 32 Min', 'price' => '99$'],
            ['id' => 2, 'title' => 'Advanced Android 12 & Kotlin Development Course', 'category' => 'UI/UX', 'image' => 'course/2.png', 'lessons' => 41, 'duration' => '3 Hrs 32 Min', 'price' => '49$'],
            ['id' => 3, 'title' => 'Complete HTML, CSS and Javascript Course', 'category' => 'Lifestyle', 'image' => 'course/3.png', 'lessons' => 32, 'duration' => '2 Hrs 32 Min', 'price' => 'Free'],
            ['id' => 4, 'title' => 'IOS and Swift Complete iOS Application Development', 'category' => 'Science', 'image' => 'course/4.png', 'lessons' => 19, 'duration' => '2 Hrs 32 Min', 'price' => '59$'],
            ['id' => 5, 'title' => 'Learn graphics design with a best IT Trainer', 'category' => 'Modern', 'image' => 'course/5.png', 'lessons' => 22, 'duration' => '2 Hrs 32 Min', 'price' => '79$'],
            ['id' => 6, 'title' => 'Complete data science for your next business', 'category' => 'Marketing', 'image' => 'course/6.png', 'lessons' => 11, 'duration' => '2 Hrs 32 Min', 'price' => '39$'],
        ];
    }

    private function instructors(): array
    {
        return [
            ['id' => 1, 'name' => 'Bilkis Vabi', 'role' => 'Web designer', 'image' => 'team/team1.jpg', 'courses' => 4, 'students' => 27],
            ['id' => 2, 'name' => 'Mood Wasim', 'role' => 'TemplateMonster company', 'image' => 'team/team2.jpg', 'courses' => 6, 'students' => 41],
            ['id' => 3, 'name' => 'Shyinn tim', 'role' => 'Codecanyou', 'image' => 'team/team3.jpg', 'courses' => 13, 'students' => 31],
            ['id' => 4, 'name' => 'Shorif shorifa', 'role' => 'Tsc chottor', 'image' => 'team/team4.jpg', 'courses' => 7, 'students' => 24],
        ];
    }

    private function posts(): array
    {
        return [
            ['id' => 1, 'title' => 'Professional Mobile Painting and Sculpting', 'category' => 'Education', 'date' => 'May 10, 2024', 'image' => 'blog/1.jpg'],
            ['id' => 2, 'title' => 'Professional Ceramic Moulding for Beginner', 'category' => 'Education', 'date' => 'May 16, 2024', 'image' => 'blog/2.jpg'],
            ['id' => 3, 'title' => 'Education Is About Create Leaders For Tomorrow', 'category' => 'Programing', 'date' => 'May 18, 2024', 'image' => 'blog/3.jpg'],
        ];
    }
}
