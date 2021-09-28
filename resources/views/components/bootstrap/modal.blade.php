<div class="modal fade" tabindex="-1" id="{{ $id }}" {{ $attributes }}>
    <div {{ $attributes->only('class')->class($modalDialogClasses()) }}>
        <div class="modal-content">
            {{ $slot }}
        </div>
    </div>
</div>
