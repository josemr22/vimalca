{{-- <div class="table w-full p-2">
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border-b">
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Plato
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Precio
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Cantidad
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $item)
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <x-input value="{{$item->autor}}"></x-input>
                    </td>
                    <td class="p-2 border-r">
                        <x-input value="{{$item->company}}"></x-input>
                    </td>
                    <td class="p-2 border-r">
                        <textarea name="" id="" cols="30" rows="5" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">{{$item->body}}</textarea>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}


    <div>
        <form wire:submit.prevent="save">
            <div class="flex mt-2 justify-end">
                <x-button>Guardar</x-button>
            </div>
            @foreach ($reviews as $index => $item)
                <x-card wire:key="review-field-{{ $item->id }}">
                    <div class="flex w-full">
                        <div class="w-full sm:px-4">
                            <x-label>Autor:</x-label>
                            <x-input wire:model.defer="reviews.{{$index}}.autor"></x-input>
                            <x-input-error for="reviews.{{$index}}.autor"></x-input-error>
                        </div>
                        <div class="w-full sm:px-4">
                            <x-label>Company:</x-label>
                            <x-input wire:model.defer="reviews.{{$index}}.company" placeholder="---"></x-input>
                            <x-input-error for="reviews.{{$index}}.company"></x-input-error>
                        </div>
                        <x-button type="button" wire:click="removeReview({{$item->id}})" class="self-start">X</x-button>
                    </div>
                    <div class="w-full sm:px-4 mt-3">
                        <x-label>Contenido:</x-label>
                        <x-textarea wire:model.defer="reviews.{{$index}}.body"></x-textarea>
                        <x-input-error for="reviews.{{$index}}.body" class="mt-2" />
                    </div>
                </x-card>
            @endforeach
        </form>
    </div>
