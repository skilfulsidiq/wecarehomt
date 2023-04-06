<div>
   <x-general.breadcrum>
        <x-slot name="title">Tenants</x-slot>
        <x-slot name="sub_title">List</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                {{-- <a href="#" class="btn btn-outline-primary">Edit Property</a> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <x-general.table-card>
                <x-slot name="title">Tenants</x-slot>
                <x-slot name="search"> @includeIf('includes.search_bar')</x-slot>
                <x-slot name="export"></x-slot>
                <x-slot name="thead">
                    <th>s/n</th>
                    <th>Name</th>

                    <th>Phone</th>
                    <th>Property</th>
                    <th>Unit</th>
                    <th>Last Rent Paid</th>
                    <th>Current Rent</th>
                    <th>Previous Due</th>
                    <th>Status</th>
                    <th>Actions</th>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <td>1</td>
                        <td>Obalowu Sodiq</td>
                        <td>08012345678</td>
                        <td>128, Lagos</td>
                        <td>A1</td>
                        <td>3000</td>
                        <td>3000</td>
                        <td><span class="badge bg-primary">3000</span></td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>View </td>
                    </tr>
                </x-slot>
                <x-slot name="paginate"></x-slot>
            </x-general.table-card>
</div>
