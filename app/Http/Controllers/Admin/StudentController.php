<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStudentRequest;
use App\Http\Requests\Admin\UpdateStudentRequest;
use App\Models\Student;
use App\Traits\ConvertsImageToWebp;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    use ConvertsImageToWebp;

    public function index(): View
    {
        $students = Student::ordered()->paginate(15);

        return view('admin.students.index', compact('students'));
    }

    public function create(): View
    {
        return view('admin.students.create');
    }

    public function store(StoreStudentRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active');
        $data['photo'] = $this->storeAsWebp($request->file('photo'), 'students');

        Student::create($data);

        return redirect()->route('admin.students.index')->with('status', 'Student added successfully.');
    }

    public function edit(Student $student): View
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(UpdateStudentRequest $request, Student $student): RedirectResponse
    {
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('photo')) {
            $this->deleteStoredImage($student->photo);
            $data['photo'] = $this->storeAsWebp($request->file('photo'), 'students');
        }

        $student->update($data);

        return redirect()->route('admin.students.index')->with('status', 'Student updated successfully.');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $this->deleteStoredImage($student->photo);
        $student->delete();

        return redirect()->route('admin.students.index')->with('status', 'Student deleted successfully.');
    }
}
