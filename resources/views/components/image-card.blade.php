@props([
    'img',
    'alt'
])
<div class="relative flex shrink-0 bg-gray-100 hover:bg-indigo-50 rounded-lg min-w-[350] ">
    <div class="relative m-0 w-2/5 shrink-0">
        <img src="https://picsum.photos/id/{{$img}}/150/300" alt="{{$alt}}"
             class=" rounded-md mx-auto">
    </div>
    <div class="m-4">
        {{ $slot }}
    </div>
</div>
