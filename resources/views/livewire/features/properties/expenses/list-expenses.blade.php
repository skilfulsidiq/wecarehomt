<div>
    <x-general.breadcrum>
        <x-slot name="title">Property</x-slot>
        <x-slot name="sub_title">Expenses</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                {{-- <a href="#" class="btn btn-outline-primary">Edit Property</a> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
        <div class="row ">
        <div class="col-md-6">
            @livewire('components.counter-card-one', ['title' => 'Target', 'value' => '10,000,000', 'color_class' => 'bg-light-success text-success', 'icon' => 'fas fa-building'])
        </div>
         <div class="col-md-6">
            @livewire('components.counter-card-one', ['title' => 'Actual', 'value' => '1,000,000', 'color_class' => 'bg-light-primary text-primary', 'icon' => 'fas fa-money-check'])
        </div>

    </div>
     <x-general.table-card>
                <x-slot name="title">Expenses</x-slot>
                <x-slot name="search"></x-slot>
                <x-slot name="export"></x-slot>
                <x-slot name="thead">
                    <th>s/n</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Total</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <td>1</td>
                        <td>2023-02-05</td>
                        <td>Building Material</td>
                        <td>Granite</td>
                        <td>20 Tons</td>
                        <td>N 15,000</td>
                        <td>15,0000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                </x-slot>
                <x-slot name="paginate"></x-slot>
            </x-general.table-card>
</div>
