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
{{--            <x-input-error :messages="$errors->authorAdd->get('author_last_name')" class="mt-2" />--}}
        </div>

        <div>
        <x-input-label for="publication" :value="__('Publication date')"/>
        <x-text-input id="publication" name="publication" type="date" class="mt-1 block w-full"
                      autocomplete="publication"/>
        </div>
        <div>
            <x-input-label for="author" :value="__('Author')"/>
            <x-dropdown-input id="author" name="author" type="text" class="mt-1 block w-full"
                          autocomplete="author"/>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add') }}</x-primary-button>
            @if (session('status') === 'author-added')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>

    </form>
</section>
