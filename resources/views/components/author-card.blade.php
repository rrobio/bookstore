@php use Carbon\Carbon; @endphp
@props(['author'])

                            {{--+ 50 cisto da dobimo neke druge slike --}}
<x-image-card :img="$author->id + 50" alt='cover photo of the author'>
    <h1>
        {{ $author->first_name . ' ' . $author->last_name }}
    </h1>
{{--    <h2 class="text-sm text-indigo-600 pt-4">--}}
{{--        {{ $book->author->first_name . ' ' . $book->author->last_name }}--}}
{{--    </h2>--}}
{{--    <h3 class="text-xs">--}}
{{--        {{ Carbon::create($book->publication)->format("Y-m-d") }}--}}
{{--    </h3>--}}
{{--    <h2 class="pt-4">--}}
{{--        {{ number_format($book->price, 2, '.', '') }}§--}}
{{--        <button class="bg-gray-300 rounded-md ml-2 p-1 px-2 hover:bg-green-300 hover:text-black">Buy</button>--}}
{{--        @auth()--}}
{{--            @if(Auth::user()->email === 'admin@example.com')--}}
{{--                <button class="bg-gray-300 rounded-md ml-1 p-1 px-2 hover:bg-red-400 hover:text-white">Edit</button>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </h2>--}}
</x-image-card>
