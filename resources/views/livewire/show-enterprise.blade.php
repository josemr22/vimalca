<div>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <x-card>
    <form wire:submit.prevent="save">
        <div class="w-full sm:px-4 mt-3" wire:ignore>
            <x-label>Quiénes Somos:</x-label>
            <textarea id="who" wire:model="enterprise.who">{!! $enterprise->who !!}</textarea>
            <x-input-error for="enterprise.who" class="mt-2" />
        </div>
        <script>
            document.addEventListener('livewire:load', function () {
                ClassicEditor
                .create( document.querySelector( '#who' ) )
                .then( editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('enterprise.who',editor.getData());
                    });
                } )
                .catch( error => {
                    console.error( error );
                } );
            });
        </script>
        <div class="w-full sm:px-4 mt-3" wire:ignore>
            <x-label>Sobre Nosotros:</x-label>
            <textarea id="about" wire:model="enterprise.about">{!! $enterprise->about !!}</textarea>
            <x-input-error for="enterprise.about" class="mt-2" />
        </div>
        <script>
            document.addEventListener('livewire:load', function () {
                ClassicEditor
                .create( document.querySelector( '#about' ) )
                .then( editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('enterprise.about',editor.getData());
                    });
                } )
                .catch( error => {
                    console.error( error );
                } );
            });
        </script>
        <div class="w-full sm:px-4 mt-3">
            <x-label>Mision</x-label>
            <x-textarea rows="3" type="text" wire:model.defer="enterprise.mision"></x-textarea>
            <x-input-error for="enterprise.mision" class="mt-2" />
        </div>
        <div class="w-full sm:px-4 mt-3">
            <x-label>Vision</x-label>
            <x-textarea rows="3" type="text" wire:model.defer="enterprise.vision"></x-textarea>
            <x-input-error for="enterprise.vision" class="mt-2" />
        </div>
        <div class="w-full sm:px-4 mt-3">
            <x-label>Imagen</x-label>
            <div class="sm:flex">
                <img class="mt-2" src="{{$enterprise->urlPath}}" width="150px" alt="img">
                <input class="ml-3 mt-2" type="file" wire:model="file">
            </div>
        </div>
        <x-button class="sm:mt-4 mt-2 sm:mx-4" wire:loading.attr="disabled">Guardar</x-button>
    </form>
    </x-card>
</div>
