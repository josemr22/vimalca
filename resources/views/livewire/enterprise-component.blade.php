@php($types = App\Models\BranchType::getList())

<div>
    <livewire:show-branches :type="'hielo'"></show-branches>
    <livewire:show-branches :type="'agua'"></show-branches>
    {{-- <livewire:show-branches :type="hielo"></show-branches> --}}
</div>
