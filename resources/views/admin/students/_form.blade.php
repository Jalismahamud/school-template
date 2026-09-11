@csrf

<div>
    <x-input-label for="name" value="Name" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $student->name ?? '') }}" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<div>
    <x-input-label for="result_title" value="Result Title" />
    <x-text-input id="result_title" name="result_title" type="text" class="mt-1 block w-full" value="{{ old('result_title', $student->result_title ?? '') }}" placeholder="যেমন: বৃত্তিপ্রাপ্ত (সাধারণ গ্রেড)" />
    <x-input-error :messages="$errors->get('result_title')" class="mt-2" />
</div>

<div>
    <x-input-label for="role_number" value="Roll Number" />
    <x-text-input id="role_number" name="role_number" type="text" class="mt-1 block w-full" value="{{ old('role_number', $student->role_number ?? '') }}" placeholder="যেমন: ৩০৩০৭৫" />
    <x-input-error :messages="$errors->get('role_number')" class="mt-2" />
</div>

<div>
    <x-input-label for="photo" value="Photo" />
    <input id="photo" name="photo" type="file" accept="image/*" class="mt-1 block w-full text-sm text-gray-600" />
    <x-input-error :messages="$errors->get('photo')" class="mt-2" />
    @if (! empty($student) && $student->photo)
        <img src="{{ asset('storage/'.$student->photo) }}" class="mt-3 h-24 w-24 rounded-full object-cover" alt="{{ $student->name }}">
    @endif
</div>

<div>
    <x-input-label for="sort_order" value="Sort Order" />
    <x-text-input id="sort_order" name="sort_order" type="number" min="0" class="mt-1 block w-full" value="{{ old('sort_order', $student->sort_order ?? 0) }}" />
    <x-input-error :messages="$errors->get('sort_order')" class="mt-2" />
</div>

<div class="flex items-center">
    <input id="is_active" name="is_active" type="checkbox" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm" {{ old('is_active', $student->is_active ?? true) ? 'checked' : '' }} />
    <label for="is_active" class="ms-2 text-sm text-gray-600">Active (visible on the website)</label>
</div>
