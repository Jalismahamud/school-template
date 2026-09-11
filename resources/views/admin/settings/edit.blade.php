<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            বিদ্যালয়ের তথ্য
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-4 rounded-md bg-green-100 px-4 py-3 text-sm text-green-800">
                    {{ session('status') }}
                </div>
            @endif

            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="school_name" value="বিদ্যালয়ের নাম" />
                        <x-text-input id="school_name" name="school_name" type="text" class="mt-1 block w-full" value="{{ old('school_name', $setting->school_name) }}" required />
                        <x-input-error :messages="$errors->get('school_name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="logo" value="Logo" />
                        <input id="logo" name="logo" type="file" accept="image/*" class="mt-1 block w-full text-sm text-gray-600" />
                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                        <img src="{{ $setting->logo_url }}" alt="বিদ্যালয়ের logo" class="mt-3 h-24 w-24 object-contain" />
                    </div>

                    <div>
                        <x-input-label for="header_label" value="Header phone label" />
                        <x-text-input id="header_label" name="header_label" type="text" class="mt-1 block w-full" value="{{ old('header_label', $setting->header_label) }}" required />
                        <x-input-error :messages="$errors->get('header_label')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="phone" value="Header ও footer phone" />
                        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" value="{{ old('phone', $setting->phone) }}" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="address" value="ঠিকানা" />
                        <textarea id="address" name="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('address', $setting->address) }}</textarea>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="whatsapp_url" value="WhatsApp link" />
                        <x-text-input id="whatsapp_url" name="whatsapp_url" type="url" class="mt-1 block w-full" value="{{ old('whatsapp_url', $setting->whatsapp_url) }}" />
                        <x-input-error :messages="$errors->get('whatsapp_url')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="footer_description" value="Footer description" />
                        <textarea id="footer_description" name="footer_description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('footer_description', $setting->footer_description) }}</textarea>
                        <x-input-error :messages="$errors->get('footer_description')" class="mt-2" />
                    </div>

                    <div class="flex justify-end">
                        <x-primary-button>তথ্য সংরক্ষণ করুন</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
