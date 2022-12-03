<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Entries') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table >
                        <thead>
                            <tr>
                                <th class="bg-gray-100">Title</th>
                                <th class="bg-gray-100">Last Update</th>
                                <th class="bg-gray-100">Count</th>
                                <th class="bg-gray-100">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($entries as $entry)
                        <tr>
                                <td class="px-3 py-2 bg-gray-50"><strong>{{ $entry->title }}</strong></td>
                                <td class="px-3 py-2"><span title="{{ $entry->updated_at->format('d.m.y H:i') }}">
                                {{ $entry->updated_at->diffForHumans() }}</span></td>
                                <td class="px-3 py-2 bg-gray-50">{{ $entry->count }}x</td>
                                <td class="px-3 py-2">
                                    @if ($entry->user->is(auth()->user()))
                                    <form method="POST" class="inline" action="{{ route('entries.update', $entry) }}">
                                        @csrf @method('patch')
                                        <button type="submit" title="Update">⏳</button>
                                        <input type="hidden" name="title" value="{{ $entry->title }}"/>
                                    </form>
                                    @endif
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-6">
                    <form method="POST" action="{{ route('entries.store') }}">
                        @csrf
                        <input type="text" name="title" value="{{ old('title') }}" />
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
