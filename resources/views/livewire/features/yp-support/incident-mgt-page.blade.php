<div>
 <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">Incident Mgt</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <button wire:click="$emit('showModal','features.yp-support.create-incident-form')" class="btn btn-outline-primary">Add Incident</button>
            </div>
        </x-slot>
    </x-general.breadcrum>
    <x-general.table-card>
                <x-slot name="title">Incident List</x-slot>
                <x-slot name="search"> @includeIf('includes.search_bar') </x-slot>
                <x-slot name="export"></x-slot>
                <x-slot name="thead">
                    <th>s/n</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Consequence</th>
                    <th>Action Tacke</th>
                    <th></th>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <td>1</td>
                        <td>2023-02-05</td>
                        <td>lagos</td>
                        <td>Emotion</td>
                        <td>Doe Jue, Adam Smith</td>
                        <td>Resolved</td>
                        <td><a href="{{route('incident-detail-page')}}"><i class="fas fa-eye"></i> </a></td>
                    </tr>
                </x-slot>
                <x-slot name="paginate"></x-slot>
        </x-general.table-card>
</div>
