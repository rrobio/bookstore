@props([
    'img',
    'alt'
])
<div class="relative flex bg-gray-100 hover:bg-indigo-50 rounded-lg">
    <div class="relative m-0 w-2/5 shrink-0">
            <img src="https://picsum.photos/id/{{$img}}/150/300" alt="{{$alt}}"
                 class=" rounded-md grid-col-span-2 mx-auto">
    </div>
    <div class="m-4">
        {{ $slot }}
    </div>
</div>
