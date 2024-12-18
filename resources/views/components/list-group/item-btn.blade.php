@props(['title' => null, 'type' => 'button'])
<x-list-group.item :attributes="$attributes" :title="$title" :type="$type" button>
    {{ $slot }}
</x-list-group.item>
