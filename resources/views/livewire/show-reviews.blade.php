<div>
        <x-card>
            <form wire:submit.prevent="save">
                <div class="flex w-full">
                    <div class="w-full sm:px-4">
                        <x-label>Autor:</x-label>
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
                <div class="flex justify-end sm:px-4">
                    @if ($action == 'edit')
                    <x-button class="mr-2 bg-red-500 hover:bg-red-700" type="button" wire:click="default()">Cancelar</x-button>
                    @endif
                    <x-button wire:loading.attr="disabled">Guardar</x-button>
                </div>
            </form>
        </x-card>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Autor
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Empresa
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Reseña
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Acciones
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($reviews as $review)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$review->autor}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$review->company ?? '---'}}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{Str::limit($review->body, 90, '...')}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button type="button" wire:click="edit({{$review->id}})" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Editar</button>
                                <button wire:click="remove({{$review->id}})" wire:loading.attr="disabled" wire:target="remove" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Eliminar</button>
                            </td>
                            </tr>
                        @endforeach
                    <!-- More people... -->
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
  
    </form>
</div>
