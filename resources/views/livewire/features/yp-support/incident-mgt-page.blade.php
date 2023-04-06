<div>
 <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">Incident Mgt</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                {{-- <a href="#" class="btn btn-outline-primary">Edit Property</a> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <x-general.table-card>
                <x-slot name="title">Incident List</x-slot>
                <x-slot name="search"></x-slot>
                <x-slot name="export"></x-slot>
                <x-slot name="thead">
                    <th>s/n</th>
                    <th>Date</th>
                    <th>Young Person Name</th>
                    <th>Focus Area</th>
                    <th>Support Staffs</th>
                    <th>Action</th>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <td>1</td>
                        <td>2023-02-05</td>
                        <td>John Doe</td>
                        <td>Emotion</td>
                        <td>Doe Jue, Adam Smith</td>
                        <td></td>
                    </tr>
                </x-slot>
                <x-slot name="paginate"></x-slot>
        </x-general.table-card>
</div>
