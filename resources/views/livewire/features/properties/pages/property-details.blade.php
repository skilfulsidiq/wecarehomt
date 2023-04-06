<div>
    <x-general.breadcrum>
        <x-slot name="title">Property</x-slot>
        <x-slot name="sub_title">Details</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="#" class="btn btn-outline-primary">Edit Property</a>
            </div>
        </x-slot>
    </x-general.breadcrum>
    <div class="row ">
        <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'Investment Value', 'value' => '10,000,000', 'color_class' => 'bg-light-success text-success', 'icon' => 'fas fa-building'])
        </div>
         <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'ROI', 'value' => '1,000,000', 'color_class' => 'bg-light-primary text-primary', 'icon' => 'fas fa-money-check'])
        </div>
          <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'Total Expenses', 'value' => '4,500,000', 'color_class' => 'bg-light-secondary text-secondary', 'icon' => 'fas fa-money-check'])
        </div>
         <div class="col-md-6 col-lg-3">
            @livewire('components.counter-card-one', ['title' => 'Investment Tenure', 'value' => '10', 'color_class' => 'bg-light-warning text-warning', 'icon' => 'fas fa-clock'])
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-md-4">
                <div class="property-image-big"
                    style="background-image:url('https://zaiproperty.zainikthemes.com/storage/files/Property/1675505942.jpg')">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                     <ul class="list-group">

                    <li class="list-group-item d-flex justify-content-between align-items-center">Total Unit<span
                            class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Available For Lease
                         <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Available For Rent <span
                            class="badge bg-primary rounded-pill">8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Current Tenants
                         <span class="badge bg-primary rounded-pill">10</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Averange Rent
                        <span class="badge bg-primary rounded-pill">22</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Development Start Date
                        <span class="badge bg-primary rounded-pill">2023-03-05</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Development End Date
                        <span class="badge bg-primary rounded-pill">2023-08-05</span>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            {{-- <div class="card-title"></div> --}}
            <x-general.table-card>
                <x-slot name="title">Units Details</x-slot>
                <x-slot name="search"></x-slot>
                <x-slot name="export"></x-slot>
                <x-slot name="thead">
                    <th>s/n</th>
                    <th>Unit</th>

                    <th>Bedroom</th>
                    <th>Bath</th>
                    <th>Rent Price</th>
                    <th>Lease Price/Tenure</th>
                    <th>Start Date</th>
                    <th>Availability</th>
                    <th>Action</th>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <td>1</td>
                        <td>A1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>N 700,000</td>
                        <td>N 8,000,000(5 Yrs)</td>
                        <td>2023-05-01</td>
                        <td>Yes</td>
                        <td>View History</td>
                    </tr>
                </x-slot>
                <x-slot name="paginate"></x-slot>
            </x-general.table-card>
        </div>
    </div>
</div>
