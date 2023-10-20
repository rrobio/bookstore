@php use Carbon\Carbon; @endphp
@props(['author'])

                            {{--+ 50 cisto da dobimo neke druge slike --}}
<x-image-card :img="$author->id + 50" alt='cover photo of the author'>
    <h1 class="text-lg font-bold">
        {{ $author->first_name . ' ' . $author->last_name }}
    </h1>
    <h2>
        Has <strong>{{ $slot }}</strong> published books.
    </h2>
</x-image-card>
