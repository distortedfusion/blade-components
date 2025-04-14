@props(['expanded' => false])
<div data-slot="accordion-item"
    x-data="{
        id: {{ crc32($slot) }},
        itemExpanded: {{ var_export($expanded, true) }},
        get expanded() {
            {{-- Explicitly expand an item before any items have been expanded --}}
            if (this.exclusive && this.active === null) {
                return this.itemExpanded
            }

            {{-- Check the open state based on the exclusive state and reset the explicit expand --}}
            if (this.exclusive) {
                this.itemExpanded = this.active === this.id

                return this.itemExpanded
            }

            return this.itemExpanded
        },
        set expanded(value) {
            this.itemExpanded = value

            if (this.exclusive) {
                this.active = value ? this.id : null
            }
        },
    }">
    {{ $slot }}
</div>
