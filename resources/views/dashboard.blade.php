<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <x-welcome />

                {{-- Form Upload CSV --}}
                <div class="mt-6">
                    <form action="{{ route('siswa.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="file">Upload CSV/XLSX:</label>
                        <input type="file" name="file" accept=".csv,.xlsx,.xls" required>
                        <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">
                            Import
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
