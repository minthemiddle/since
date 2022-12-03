<x-app-layout>
    <form method="POST" action="{{ route('entries.update', $entry) }}">
        @csrf
        @method('patch')
        <div>
            <label>
                <h2 class="italic">Title</h2>
                <input class="w-64" type="text" name="title" value="{{ $entry->title ?? old('title') }}" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </label>
        </div>
        
        <div>
            <label>
                <h2 class="italic">Comment</h2>
                <textarea class="w-full" name="comment">{{ $entry->comment ?? old('comment') }}</textarea>
                <x-input-error :messages="$errors->get('comment')" class="mt-2" />
            </label>
        </div>
                    
        <x-primary-button class="mt-4">{{ __('Update') }}</x-primary-button>
    </form>
</x-app-layout>
