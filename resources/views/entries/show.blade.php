<x-app-layout>
    <p><strong>{{ $entry->title }}</strong></p>
    <p class="mt-2"><i>When?</i><br>
        {{ $entry->updated_at->diffForHumans() }} ({{  $entry->updated_at->format('l Y-m-d H:i') }})</p>
    @if ($entry->comment)
    <p class="mt-2"><i>Comment</i></p>
    <p>{{ $entry->comment ?? '' }}</p>
    @endif
    
    <p class="mt-2">
        <x-secondary-button><a href="{{ route('entries.edit', $entry) }}">Edit</a></x-secondary-button>
    </p>
</x-app-layout>
