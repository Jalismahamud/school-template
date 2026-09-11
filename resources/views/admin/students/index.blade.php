<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Talent Pool Students') }}
            </h2>
            <a href="{{ route('admin.students.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                {{ __('Add Student') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            @if (session('status'))
                <div class="bg-green-100 text-green-800 text-sm rounded-md px-4 py-3">
                    {{ session('status') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Photo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Roll Number</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($students as $student)
                            <tr>
                                <td class="px-6 py-4">
                                    @if ($student->photo)
                                        <img src="{{ asset('storage/'.$student->photo) }}" class="h-12 w-12 rounded-full object-cover" alt="{{ $student->name }}">
                                    @else
                                        <div class="h-12 w-12 rounded-full bg-gray-200"></div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $student->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $student->role_number ?: '—' }}</td>
                                <td class="px-6 py-4 text-sm">
                                    @if ($student->is_active)
                                        <span class="inline-flex px-2 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    @else
                                        <span class="inline-flex px-2 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Inactive</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right text-sm space-x-3">
                                    <a href="{{ route('admin.students.edit', $student) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="{{ route('admin.students.destroy', $student) }}" method="POST" class="inline" onsubmit="return confirm('Delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-8 text-center text-sm text-gray-500">No students added yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $students->links() }}
        </div>
    </div>
</x-app-layout>
