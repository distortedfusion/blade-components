<x-form.section>
    <div class="col-span-3">
        @if ($cancelButton ?? false)
            {{ $cancelButton }}
        @elseif($isWired() && method_exists($this, 'redirectWithPrevious') && $redirectPrevious)
            {{-- In a livewire context with the `\DistortedFusion\LivewireSupport\RedirectsWithPrevious` trait use the `redirectWithPrevious` method instead, this resolves an issue where form updates change the previous URL. --}}
            <button type="button" class="btn btn-block btn-default"
                wire:click="redirectWithPrevious('{{ $cancel }}')">
                {{ $cancelTitle ?: __('Cancel') }}
            </button>
        @else
            {{-- In standard HTML forms use the session based previous URL. --}}
            <a href="{{ $cancelUrl() }}" class="btn btn-block btn-default">
                {{ $cancelTitle ?: __('Cancel') }}
            </a>
        @endif
    </div>
    <div class="col-span-3">
        @if ($submitButton ?? false)
            {{ $submitButton }}
        @else
            <x-form-submit :class="sprintf('btn-block %s', $submitButtonClass())">
                {{ $submitTitle }}
            </x-form-submit>
        @endif
    </div>
</x-form.section>
