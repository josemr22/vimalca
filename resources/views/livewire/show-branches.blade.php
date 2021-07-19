<div>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <x-card>
        <div class="flex justify-center">{{App\Models\BranchType::getList()["$type"]["label"]}}</div>
    </x-card>

    <form wire:submit.prevent="save">
        <x-card>
            <div class="w-full sm:px-4 mt-3" wire:ignore>
                <x-label>Introducción:</x-label>
                <textarea id="introduction" wire:model="branch.introduction">{!! $branch->introduction !!}</textarea>
                <x-input-error for="branch.introduction" class="mt-2" />
            </div>
            <div class="w-full sm:px-4 mt-3" wire:ignore>
                <x-label>Descripción:</x-label>
                <textarea id="description" wire:model="branch.description">{!! $branch->description !!}</textarea>
                <x-input-error for="branch.description" class="mt-2" />
            </div>
            <div class="w-full sm:px-4 mt-3">
                <x-label>Resumen Slider:</x-label>
                <x-textarea id="resume" wire:model.defer="branch.resume">{{ $branch->resume }}</x-textarea>
                <x-input-error for="branch.resume" class="mt-2" />
            </div>
            <div class="w-full sm:px-4 mt-3">
                <x-label>Imagen: (750 x 500)</x-label>
                <div>
                    <img src="{{$branch->urlPath}}" width="150px" alt="img">
                </div>
                <x-input type="file" wire:model.defer="file"></x-input>
                <x-input-error for="file" class="mt-2" />
            </div>
            <div class="w-full sm:px-4 mt-3">
                <x-label>Video:</x-label>
                <x-input wire:model.defer="branch.video"></x-input>
                <x-input-error for="branch.video" class="mt-2" />
            </div>
            <div class="w-full flex justify-between sm:px-4 mt-3">
                <x-button onclick="location.href='{{route('branches')}}'">Regresar</x-button>
                <x-button wire:loading.attr="disabled">Guardar</x-button>
            </div>
            <script>
                document.addEventListener('livewire:load', function () {
                    ClassicEditor
                    .create( document.querySelector( '#introduction' ) )
                    .then( editor => {
                        editor.model.document.on('change:data', () => {
                            @this.set('branch.introduction',editor.getData());
                        });
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
                });
            </script>
            <script>
                ClassicEditor
                .create( document.querySelector( '#description' ) )
                .then( editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('branch.description', editor.getData());
                        console.log(@this.branch.description);
                        
                    });
                } )
                .catch( error => {
                    console.error( error );
                } );
            </script>
        </x-card>
    </form>
</div>
