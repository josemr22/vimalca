<div>
    <x-card>
    <form wire:submit.prevent="save">
        @foreach ($collection as $index => $item)
        <div class="sm:mt-4 mt-2">
            <x-label>{{$item->two}}</x-label>
            <x-textarea rows="4" type="text" wire:model="collection.{{$index}}.one"></x-textarea>
            <x-input-error for="collection.{{$index}}.one" class="mt-2" />
        </div>
        @endforeach
        <x-button class="sm:mt-4 mt-2">Guardar</x-button>
    </form>
    </x-card>
</div>
