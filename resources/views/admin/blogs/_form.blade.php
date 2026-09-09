@csrf

<div>
    <x-input-label for="title" value="Title" />
    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title', $blog->title ?? '') }}" required autofocus />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>

<div>
    <x-input-label for="category" value="Category" />
    <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" value="{{ old('category', $blog->category ?? '') }}" placeholder="e.g. শিক্ষা" />
    <x-input-error :messages="$errors->get('category')" class="mt-2" />
</div>

<div>
    <x-input-label for="featured_image" value="Featured Image" />
    <input id="featured_image" name="featured_image" type="file" accept="image/*" class="mt-1 block w-full text-sm text-gray-600" />
    <x-input-error :messages="$errors->get('featured_image')" class="mt-2" />
    @if (! empty($blog) && $blog->featured_image)
        <img src="{{ asset('storage/'.$blog->featured_image) }}" class="mt-3 h-32 w-auto rounded" alt="{{ $blog->title }}">
    @endif
</div>

<div>
    <x-input-label for="content" value="Content" />
    <textarea id="content" name="content" rows="10" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('content', $blog->content ?? '') }}</textarea>
    <x-input-error :messages="$errors->get('content')" class="mt-2" />
</div>

<div>
    <x-input-label for="published_at" value="Published Date" />
    <x-text-input id="published_at" name="published_at" type="date" class="mt-1 block w-full" value="{{ old('published_at', optional($blog->published_at ?? null)->format('Y-m-d')) }}" />
    <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
</div>

<div>
    <x-input-label for="author_name" value="Author Name" />
    <x-text-input id="author_name" name="author_name" type="text" class="mt-1 block w-full" value="{{ old('author_name', $blog->author_name ?? '') }}" />
    <x-input-error :messages="$errors->get('author_name')" class="mt-2" />
</div>

<div class="flex items-center">
    <input id="is_published" name="is_published" type="checkbox" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm" {{ old('is_published', $blog->is_published ?? true) ? 'checked' : '' }} />
    <label for="is_published" class="ms-2 text-sm text-gray-600">Published (visible on the website)</label>
</div>
