<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">বার্তার বিস্তারিত</h2>
            <a href="{{ route('admin.messages.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900">সব বার্তায় ফিরুন</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-6 rounded-lg bg-white p-6 shadow-sm">
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <p class="text-xs font-semibold uppercase text-gray-500">নাম</p>
                        <p class="mt-1 text-gray-900">{{ $contactMessage->name }}</p>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase text-gray-500">ইমেইল</p>
                        <a href="mailto:{{ $contactMessage->email }}" class="mt-1 block text-indigo-600">{{ $contactMessage->email }}</a>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase text-gray-500">বিষয়</p>
                        <p class="mt-1 text-gray-900">{{ $contactMessage->subject ?: 'বিষয় উল্লেখ নেই' }}</p>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase text-gray-500">প্রাপ্তির সময়</p>
                        <p class="mt-1 text-gray-900">{{ $contactMessage->created_at->format('d/m/Y h:i A') }}</p>
                    </div>
                </div>
                <div class="border-t border-gray-200 pt-5">
                    <p class="text-xs font-semibold uppercase text-gray-500">বার্তা</p>
                    <p class="mt-3 whitespace-pre-line leading-7 text-gray-800">{{ $contactMessage->message }}</p>
                </div>
                <div class="flex justify-end">
                    @if ($contactMessage->read_at)
                        <form action="{{ route('admin.messages.unread', $contactMessage) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="rounded-md bg-amber-600 px-4 py-2 text-sm font-semibold text-white hover:bg-amber-700">অপঠিত করুন</button>
                        </form>
                    @else
                        <form action="{{ route('admin.messages.read', $contactMessage) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">পড়া হয়েছে করুন</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
