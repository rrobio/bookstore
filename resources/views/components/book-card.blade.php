@props(['book'])

<div class="relative flex bg-gray-100 rounded-lg">
   <div class="relative m-0 w-2/5 shrink-0">
       <img src="https://picsum.photos/id/{{$book->id}}/150/300" alt="book cover" class=" rounded-md grid-col-span-2 mx-auto">
   </div>
    <div class="m-4">
        <h1>
            {{ $book->title }}
        </h1>
        <h2 class="text-sm text-indigo-600 pt-4">
            {{ $book->author->first_name . ' ' . $book->author->last_name }}
        </h2>
        <h2 class="pt-4">
            {{ number_format($book->price, 2, '.', '') }}§
            <button class="bg-gray-300 rounded-md ml-2 p-1 px-2 hover:bg-indigo-300 hover:text-white">Buy</button>
            @auth()
               @if(Auth::user()->email === 'admin@example.com')
                    <button class="bg-gray-300 rounded-md ml-1 p-1 px-2 hover:bg-red-300 hover:text-white">Edit</button>
                @endif
            @endauth
        </h2>
    </div>
</div>
