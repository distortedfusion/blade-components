<x-container class="w-full text-sm space-y-8">
    <div class="space-y-2">
        <x-alert type="success" title="Action required">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</x-alert>
        <x-alert type="info" title="Action required">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</x-alert>
        <x-alert type="warning" title="Action required">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</x-alert>
        <x-alert type="danger" title="Action required">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</x-alert>
        <x-alert type="default" title="Action required">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</x-alert>
    </div>

    <hr>

    <div class="space-y-2">
        <x-layout.photo url="/img/avatar.jpeg" />
        <x-layout.photo />
    </div>

    <hr>

    <div class="space-y-2">
        <x-field.boolean :state="true" />
        <x-field.boolean :state="false" />
    </div>

    <hr>

    <div class="space-y-2">
        <x-form-help>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</x-form-help>
    </div>

    <hr>

    <div class="space-y-2">
        <x-layout.spinner />
    </div>

    <hr>

    <div class="space-y-2">
        <x-layout.title-bar title="Page Title" previous-url="#" />
    </div>

    <hr>

    <div class="space-y-2 space-x-2">
        <x-layout.icon icon="fad-badge-dollar" />
        <x-layout.icon-muted icon="fad-badge-dollar" />
    </div>

    <hr>

    <div class="space-y-2 space-x-2">
        <x-bootstrap.modal-confirmation id="confirmation" class="show">
            <x-slot name="title">
                {{ __('Are you sure you want to continue?') }}
            </x-slot>

            <x-slot name="content">
                <p>{{ __('The entry and all of its data will be removed, this can not be undone!') }}</p>
            </x-slot>

            <x-slot name="footer">
                <x-form.actions :submitTitle="__('Yes, Delete')" style="danger">
                    <x-slot name="cancelButton">
                        <button type="button" class="btn btn-default btn-block" data-dismiss="modal">
                            {{ __('No, Cancel') }}
                        </button>
                    </x-slot>
                </x-form.actions>
            </x-slot>
        </x-bootstrap.modal-confirmation>

        <x-bootstrap.modal-dialog id="dialog" class="show">
            <x-slot name="title">
                {{ __('Are you sure you want to continue?') }}
            </x-slot>

            <x-slot name="content">
                <p>{{ __('The entry and all of its data will be removed, this can not be undone!') }}</p>
            </x-slot>

            <x-slot name="footer">
                <x-form.actions :submitTitle="__('Yes, Delete')" style="danger">
                    <x-slot name="cancelButton">
                        <button type="button" class="btn btn-default btn-block" data-dismiss="modal">
                            {{ __('No, Cancel') }}
                        </button>
                    </x-slot>
                </x-form.actions>
            </x-slot>
        </x-bootstrap.modal-dialog>
    </div>
</x-container>
