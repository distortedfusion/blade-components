<div id="{{ $id }}" {{ $attributes->merge(['class' => 'modal fade']) }} tabindex="-1">
    <div {{ $attributes->only('class')->class($modalDialogClasses()) }}>
        <div class="modal-content flex flex-col w-full bg-white dark:bg-black rounded-lg shadow-xl relative outline-none">
            {{ $slot }}
        </div>
    </div>
</div>
