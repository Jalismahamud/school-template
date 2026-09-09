<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use App\Models\Blog;
use App\Traits\ConvertsImageToWebp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
{
    use ConvertsImageToWebp;

    public function index(): View
    {
        $blogs = Blog::latestFirst()->paginate(15);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create(): View
    {
        return view('admin.blogs.create');
    }

    public function store(StoreBlogRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['slug'] = $this->uniqueSlug($request->string('title'));
        $data['is_published'] = $request->boolean('is_published');
        $data['featured_image'] = $this->storeAsWebp($request->file('featured_image'), 'blogs');

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('status', 'Blog post added successfully.');
    }

    public function edit(Blog $blog): View
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(UpdateBlogRequest $request, Blog $blog): RedirectResponse
    {
        $data = $request->validated();
        $data['is_published'] = $request->boolean('is_published');

        if ($request->hasFile('featured_image')) {
            $this->deleteStoredImage($blog->featured_image);
            $data['featured_image'] = $this->storeAsWebp($request->file('featured_image'), 'blogs');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('status', 'Blog post updated successfully.');
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        $this->deleteStoredImage($blog->featured_image);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('status', 'Blog post deleted successfully.');
    }

    private function uniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $count = 1;

        while (Blog::where('slug', $slug)->exists()) {
            $slug = $original.'-'.$count++;
        }

        return $slug;
    }
}
