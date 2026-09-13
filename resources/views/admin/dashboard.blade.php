<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-4">
                <a href="{{ route('admin.teachers.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-md transition">
                    <p class="text-sm text-gray-500">Teachers</p>
                    <p class="text-3xl font-semibold text-gray-800">{{ $teacherCount }}</p>
                    <p class="text-indigo-600 text-sm mt-2">Manage teachers &rarr;</p>
                </a>
                <a href="{{ route('admin.students.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-md transition">
                    <p class="text-sm text-gray-500">Talent Pool Students</p>
                    <p class="text-3xl font-semibold text-gray-800">{{ $studentCount }}</p>
                    <p class="text-indigo-600 text-sm mt-2">Manage talent pool &rarr;</p>
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-md transition">
                    <p class="text-sm text-gray-500">Blog Posts</p>
                    <p class="text-3xl font-semibold text-gray-800">{{ $blogCount }}</p>
                    <p class="text-indigo-600 text-sm mt-2">Manage blog &rarr;</p>
                </a>
                <a href="{{ route('admin.messages.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-md transition">
                    <p class="text-sm text-gray-500">যোগাযোগের বার্তা</p>
                    <p class="text-3xl font-semibold text-gray-800">{{ $messageCount }}</p>
                    <p class="mt-2 text-indigo-600 text-sm">অপঠিত: {{ $unreadMessageCount }}টি &rarr;</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
