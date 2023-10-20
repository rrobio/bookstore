<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add book') }}
        </h2>
    </header>

    <form method="post" action="{{ route('books.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <div>
            <x-input-label for="title" :value="__('Title')"/>
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                          autocomplete="title"/>
            <x-input-error :messages="$errors->bookAdd->get('title')" class="mt-2"/>
        </div>

        <div>
            <x-input-label for="publication" :value="__('Publication date')"/>
            <x-text-input id="publication" name="publication" type="date" class="mt-1 block w-full"
                          autocomplete="publication"/>
            <x-input-error :messages="$errors->bookAdd->get('publication')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="author_id" :value="__('Author')"/>
            <x-dropdown-input id="author_id" name="author_id" type="text" class="mt-1 block w-full"
                              autocomplete="author" :authors="$authors"/>
            <x-input-error :messages="$errors->bookAdd->get('author_id')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="price" :value="__('Price')"/>
            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full"
                          autocomplete="price"/>
            <x-input-error :messages="$errors->bookAdd->get('price')" class="mt-2"/>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add') }}</x-primary-button>
            @if (session('status') === 'book-added')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Book added.') }}</p>
            @endif
        </div>

    </form>
</section>
