@php($types = App\Models\BranchType::getList())
<div>
    <div class="flex justify-center flex-wrap mt-4">
        <select wire:model="type">
            @foreach ($types as $index => $item)
                <option value="{{$index}}">{{$item['label']}}</option>
            @endforeach
        </select>
    </div>
    <x-card>
        <!-- component -->
        <div class="table w-full p-2">
            @if (session()->has('message'))
                <x-alert message="{{ session('message') }}"></x-alert>
            @endif
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-50 border-b">
                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                            <div class="flex items-center justify-center">
                                Nombre
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                            <div class="flex items-center justify-center">
                                Imagen
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                            <div class="flex items-center justify-center">
                                Acciones
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-50 text-center">
                        <form wire:submit.prevent="save">
                            <td class="p-2 border-r">
                                <input required wire:model.defer="name" type="text" class="border p-1">
                                <x-input-error for="name"></x-input-error>
                            </td>
                            <td class="p-2 border-r">
                                <input {{$action=='store' ? 'required' : ''}} wire:model="file" type="file" class="border p-1">
                                <x-input-error for="file"></x-input-error>
                            </td>
                            <td class="p-2 border-r">
                                @if ($action!='store')
                                    <x-button class="mr-2 bg-red-500 hover:bg-red-700" type="button" wire:click="default()">Cancelar</x-button>
                                @endif
                                <x-button wire:loading.attr="disabled">Guardar</x-button>
                            </td>
                        </form>
                    </tr>
                    @foreach ($galleries as $item)
                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                            <td class="p-2 border-r">{{$item->one ?? '---'}}</td>
                            <td class="p-2 border-r" align="center"><img width="150px" src="{{$item->urlPath}}" alt="img"></td>
                            <td>
                                <button wire:click="edit({{$item->id}})" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Editar</button>
                                <button wire:click="remove({{$item->id}})" wire:loading.attr="disabled" wire:target="remove" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-card>
</div>

