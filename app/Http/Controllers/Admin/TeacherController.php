<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTeacherRequest;
use App\Http\Requests\Admin\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Traits\ConvertsImageToWebp;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeacherController extends Controller
{
    use ConvertsImageToWebp;

    public function index(): View
    {
        $teachers = Teacher::ordered()->paginate(15);

        return view('admin.teachers.index', compact('teachers'));
    }

    public function create(): View
    {
        return view('admin.teachers.create');
    }

    public function store(StoreTeacherRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active');
        $data['photo'] = $this->storeAsWebp($request->file('photo'), 'teachers');

        Teacher::create($data);

        return redirect()->route('admin.teachers.index')->with('status', 'Teacher added successfully.');
    }

    public function edit(Teacher $teacher): View
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(UpdateTeacherRequest $request, Teacher $teacher): RedirectResponse
    {
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('photo')) {
            $this->deleteStoredImage($teacher->photo);
            $data['photo'] = $this->storeAsWebp($request->file('photo'), 'teachers');
        }

        $teacher->update($data);

        return redirect()->route('admin.teachers.index')->with('status', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher): RedirectResponse
    {
        $this->deleteStoredImage($teacher->photo);
        $teacher->delete();

        return redirect()->route('admin.teachers.index')->with('status', 'Teacher deleted successfully.');
    }
}
