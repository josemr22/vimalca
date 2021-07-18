<x-app-layout>
    <x-card>
        <h1 class="font-bold text-2xl text-center">Seleccione negocio a editar</h1>

        <div class="flex flex-col items-start">
            @foreach ($branches as $item)
                <x-button onclick="location.href='{{route('branches.edit',$item->name)}}'" class="mt-3" type="button">
                    {{App\Models\BranchType::getList()["$item->name"]["label"]}}
                </x-button>
            @endforeach
        </div>
    </x-card>
</x-app-layout>