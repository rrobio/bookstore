@props(['author'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Authors
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex space-x-8">
                    <img src="https://picsum.photos/id/{{$author->id + 20}}/150/300" alt="picture of the author"
                         class="rounded-lg"/>
                    <div>
                        <span class="font-bold text-xl mt-2">
                            {{ $author->first_name . ' ' . $author->last_name }}
                        </span>
                        <p>
                            Bio..
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-3 text-xl">
                        Published Books
                    </h1>
                    <div
                        class="sm:flex sm:flex-col md:grid  justify-items-center gap-6 xl:grid-cols-[repeat(3,minmax(345px,_1fr))] md:grid-cols-[repeat(2,minmax(345px,_1fr))]">
                        @foreach ($author->books as $book)
                            <x-book-card :book="$book"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
