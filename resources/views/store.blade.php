<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Store
            <span class="mb-6 justify-center text-sm">
                - Welcome to the Store
            </span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid lg:grid-cols-3 m-6 sm:grid-cols-2 justify-items-center gap-6">
                        @foreach ($books as $book)
                            <x-book-card :book="$book" />
                        @endforeach
                    </div>
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
