@csrf

<div>
    <x-input-label for="name" value="Name" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $teacher->name ?? '') }}" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<div>
    <x-input-label for="designation" value="Designation" />
    <x-text-input id="designation" name="designation" type="text" class="mt-1 block w-full" value="{{ old('designation', $teacher->designation ?? '') }}" placeholder="e.g. প্রধান শিক্ষক (ভারপ্রাপ্ত)" />
    <x-input-error :messages="$errors->get('designation')" class="mt-2" />
</div>

<div>
    <x-input-label for="phone" value="Phone" />
    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" value="{{ old('phone', $teacher->phone ?? '') }}" />
    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
</div>

<div>
    <x-input-label for="photo" value="Photo" />
    <input id="photo" name="photo" type="file" accept="image/*" class="mt-1 block w-full text-sm text-gray-600" />
    <x-input-error :messages="$errors->get('photo')" class="mt-2" />
    @if (! empty($teacher) && $teacher->photo)
        <img src="{{ asset('storage/'.$teacher->photo) }}" class="mt-3 h-24 w-24 rounded-full object-cover" alt="{{ $teacher->name }}">
    @endif
</div>

<div>
    <x-input-label for="sort_order" value="Sort Order" />
    <x-text-input id="sort_order" name="sort_order" type="number" min="0" class="mt-1 block w-full" value="{{ old('sort_order', $teacher->sort_order ?? 0) }}" />
    <x-input-error :messages="$errors->get('sort_order')" class="mt-2" />
</div>

<div class="flex items-center">
    <input id="is_active" name="is_active" type="checkbox" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm" {{ old('is_active', $teacher->is_active ?? true) ? 'checked' : '' }} />
    <label for="is_active" class="ms-2 text-sm text-gray-600">Active (visible on the website)</label>
</div>
