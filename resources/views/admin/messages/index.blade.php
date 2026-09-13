<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">যোগাযোগের বার্তা</h2>
            @if ($messages->total() > 0)
                <span class="rounded-full bg-indigo-100 px-3 py-1 text-sm font-semibold text-indigo-800">মোট {{ $messages->total() }}টি</span>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-4 sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="rounded-md bg-green-100 px-4 py-3 text-sm text-green-800">{{ session('status') }}</div>
            @endif

            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">অবস্থা</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">নাম</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">বিষয়</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">তারিখ</th>
                                <th class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500">কাজ</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse ($messages as $message)
                                <tr class="{{ $message->read_at ? '' : 'bg-indigo-50' }}">
                                    <td class="px-6 py-4 text-sm">
                                        @if ($message->read_at)
                                            <span class="rounded-full bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-700">পড়া হয়েছে</span>
                                        @else
                                            <span class="rounded-full bg-red-100 px-2 py-1 text-xs font-semibold text-red-700">নতুন</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $message->name }}<br><span class="font-normal text-gray-500">{{ $message->email }}</span></td>
                                    <td class="px-6 py-4 text-sm text-gray-700">{{ $message->subject ?: 'বিষয় উল্লেখ নেই' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $message->created_at->format('d/m/Y h:i A') }}</td>
                                    <td class="space-x-3 px-6 py-4 text-right text-sm">
                                        <a href="{{ route('admin.messages.show', $message) }}" class="text-indigo-600 hover:text-indigo-900">দেখুন</a>
                                        @if ($message->read_at)
                                            <form action="{{ route('admin.messages.unread', $message) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-amber-600 hover:text-amber-900">অপঠিত করুন</button>
                                            </form>
                                        @else
                                            <form action="{{ route('admin.messages.read', $message) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-green-600 hover:text-green-900">পড়া হয়েছে করুন</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-sm text-gray-500">এখনও কোনো বার্তা পাওয়া যায়নি।</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{ $messages->links() }}
        </div>
    </div>
</x-app-layout>
