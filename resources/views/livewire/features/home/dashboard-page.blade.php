<div>
     <x-general.breadcrum>
        <x-slot name="title">Home</x-slot>
        <x-slot name="sub_title">Dashboard</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                {{-- <a href="#" class="btn btn-outline-primary">Edit Property</a> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <div class="row ">
        <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'Total Properties', 'value' => '10', 'color_class' => 'bg-light-success text-success', 'icon' => 'fas fa-building'])
        </div>
         <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'Total Apartments', 'value' => '10', 'color_class' => 'bg-light-primary text-primary', 'icon' => 'fas fa-building-o'])
        </div>
          <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'Total Tenants', 'value' => '10', 'color_class' => 'bg-light-secondary text-secondary', 'icon' => 'fas fa-users'])
        </div>
         <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'Total Agent', 'value' => '10', 'color_class' => 'bg-light-warning text-warning', 'icon' => 'fas fa-user'])
        </div>
    </div>
    <div class="row ">
       <div class="col-md-6">
            @livewire('components.bar-chart-one', ['title' => 'Rent Analysis'])
        </div>
        <div class="col-md-6">
            @livewire('components.bar-chart-one', ['title' => 'Lease Analysis'])
        </div>
    </div>
    <div class="row row-cols-1 row-cols-xl-2">
        <div class="col d-flex">
            {{-- @livewire('components.bar-chart-one', ['title' => 'Rent Analysis']) --}}
        </div>
        <div class="col d-flex">
            {{-- @livewire('components.bar-chart-one', ['title' => 'Lease Analysis']) --}}
        </div>
    </div>
</div>
