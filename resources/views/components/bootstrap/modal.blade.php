<div id="{{ $id }}" {{ $attributes->merge(['class' => 'modal fade']) }} tabindex="-1">
    <div {{ $attributes->only('class')->class($modalDialogClasses()) }}>
        <div class="modal-content">
            {{ $slot }}
        </div>
    </div>
</div>
