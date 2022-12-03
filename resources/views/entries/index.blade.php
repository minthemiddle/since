<x-app-layout>
    <table class="">
        <thead>
            <tr>
                <th class="xs:pl-1 pl-2 text-xs text-left font-normal italic">Title</th>
                <th class="text-xs text-center font-normal italic">Last</th>
                <th class="text-xs text-center font-normal italic">#</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
        @foreach ($entries as $entry)
        <tr>
                <td class="px-1 md:px-3 py-1 md:py-2"><a href="{{ route('entries.show', $entry) }}"><strong>{{ $entry->title }}</strong></a></td>
                <td class="px-1 md:px-3 py-1 md:py-2"><span title="{{ $entry->updated_at->format('d.m.y H:i') }}">
                {{ $entry->updated_at->shortRelativeDiffForHumans() }}</span></td>
                <td class="px-1 md:px-3 py-1 md:py-2">{{ $entry->count }}x</td>
                <td class="px-1 md:px-3 py-1 md:py-2">
                    @if ($entry->user->is(auth()->user()))
                    <form method="POST" class="inline" action="{{ route('entries.update', $entry) }}">
                        @csrf @method('patch')
                        <input type="hidden" value="{{ $entry->title }}">
                        <button type="submit" title="Update">⏳</button>
                    </form>
                    <a href="{{ route('entries.edit', $entry) }}">✏️</a>
                    <form method="POST" class="inline" action="{{ route('entries.destroy', $entry) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" title="Delete"><span class="opacity-10">❌</span></button>
                    </form>
                    @endif
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>             
</x-app-layout>
