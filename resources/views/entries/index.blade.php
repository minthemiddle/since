<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Entries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul class="list-disc">
                        @foreach($entries as $entry)
                            <li><strong>{{ $entry->title }}</strong>, {{ $entry->updated_at->diffForHumans() }} ({{ $entry->count }}x), @if ($entry->user->is(auth()->user()))<form method="POST" class="inline" action="{{ route('entries.update', $entry) }}"> @csrf @method('patch')<input type="submit" value="Update" class="underline"><input type="hidden" name="title" value="{{ $entry->title }}"></form> @endif</li>
                        @endforeach
                    </ul>
                </div>
        <div class="p-6">
        <form method="POST" action="{{ route('entries.store') }}">
            @csrf
            <input type="text" name="title" value="{{ old('title') }}">
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
        </form>
    </div>
            </div>
        </div>
    </div>
    
    
    
</x-app-layout>