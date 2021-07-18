<div>
    
    <x-card>
        <div class="flex w-full">
            <div class="w-full sm:px-4">
                <x-label>Autor:{{$review->autor}}</x-label>
                <x-input wire:model.defer="review.autor"></x-input>
                <x-input-error for="review.autor"></x-input-error>
            </div>
            <div class="w-full sm:px-4">
                <x-label>Company:</x-label>
                <x-input wire:model.defer="review.company" placeholder="---"></x-input>
                <x-input-error for="review.company"></x-input-error>
            </div>
        </div>
        <div class="w-full sm:px-4 mt-3">
            <x-label>Contenido:</x-label>
            <x-textarea wire:model.defer="review.body"></x-textarea>
            <x-input-error for="review.body" class="mt-2" />
        </div>
        <div class="flex justify-end">
            <x-button type="button" wire:click="update()" class="self-start">Guardar</x-button>
            {{-- <x-button type="button" wire:click="save({{$item->id}})" class="self-start">X</x-button> --}}
        </div>
    </x-card>
</div>