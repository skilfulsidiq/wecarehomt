<div>
 <x-general.breadcrum>
        <x-slot name="title">Property</x-slot>
        <x-slot name="sub_title">List</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">

            </div>
        </x-slot>
    </x-general.breadcrum>
    <div class="row">
        <div class="col-md-3">
            @includeIf('includes.search_bar')
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6 col-lg-3 col-sm-6">
            @livewire('features.properties.components.property-card')
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6">
            @livewire('features.properties.components.property-card')
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6">
            @livewire('features.properties.components.property-card')
        </div>
    </div>
    {{-- <x-general.table-card>
        <x-slot name="title">Property</x-slot>
        <x-slot name="search">@includeIf('includes.search_bar')</x-slot>
        <x-slot name="export"></x-slot>
        <x-slot name="thead">

        </x-slot>
        <x-slot name="tbody">

        </x-slot>
        <x-slot name="paginate"></x-slot>
    </x-general.table-card> --}}
</div>
