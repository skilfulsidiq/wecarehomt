<div>
 <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">Meaningfuk Interaction</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="{{route('meaningful-form-page')}}" class="btn btn-outline-primary">Add Interaction</a>
                {{-- <button wire:click="$emit('showModal','features.yp-support.create-interaction-form')" class="btn btn-outline-primary">Add Interaction</button> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <x-general.table-card>
                <x-slot name="title">Interaction List</x-slot>
                <x-slot name="search"> @includeIf('includes.search_bar') </x-slot>
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
                        <td>
                            <a href="{{route('meaningful-detail-page')}}" class="btn btn-outline-primary btn-sm text-center"> <i class="fas fa-eye"></i> </a>
                        </td>
                    </tr>
                </x-slot>
                <x-slot name="paginate"></x-slot>
        </x-general.table-card>
</div>
