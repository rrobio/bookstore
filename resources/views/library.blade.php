<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Store
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-6 justify-center">
                        Welcome to your library
                    </p>
                    <div class="grid lg:grid-cols-3 m-6 sm:grid-cols-2 justify-items-center">
                        @foreach ($books as $book)
                            <div class="w-72 h-48 mb-4 p-4 bg-gray-100 rounded-lg grid grid-rows-2 grid-cols-2 text-sm">
                                <img src="https://picsum.photos/id/{{$book->id}}/80/160" alt="book cover"
                                     class="m-auto rounded-md grid-col-span-2">
                                <div class="grid-row-span-1 m-auto">
                                    {{ $book->title }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
