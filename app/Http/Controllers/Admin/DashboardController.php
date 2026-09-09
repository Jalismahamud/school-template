<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $teacherCount = Teacher::count();
        $studentCount = Student::count();

        return view('admin.dashboard', compact('teacherCount', 'studentCount'));
    }
}
