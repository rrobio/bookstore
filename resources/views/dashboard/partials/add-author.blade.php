<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add author') }}
        </h2>
    </header>

    <form method="post" action="{{ route('authors.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <div>
            <x-input-label for="author_first_name" :value="__('First name')"/>
            <x-text-input id="author_first_name" name="author_first_name" type="text" class="mt-1 block w-full"
                          autocomplete="author_first_name"/>
            <x-input-error :messages="$errors->authorAdd->get('author_first_name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="author_last_name" :value="__('Last name')"/>
            <x-text-input id="author_last_name" name="author_last_name" type="text" class="mt-1 block w-full"
                          autocomplete="author_last_name"/>
            <x-input-error :messages="$errors->authorAdd->get('author_last_name')" class="mt-2" />
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
                >{{ __('Author added.') }}</p>
            @endif
        </div>

    </form>
</section>
