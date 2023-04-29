<div>
 <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">KWS/x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="{{route('create-key-work-page')}}" class="btn btn-outline-primary">Add Session</a>
                {{-- <button wire:click="$emit('showModal','features.yp-support.create-key-session-form')" class="btn btn-outline-primary">Add </button> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <x-general.table-card>
                <x-slot name="title">KWS List</x-slot>
                <x-slot name="search"> @includeIf('includes.search_bar') </x-slot>
                <x-slot name="export"></x-slot>
                <x-slot name="thead">
                    <th>s/n</th>
                    <th>Date</th>
                    <th>Young Person Name</th>
                    <th>Session Title</th>
                    <th>Material Needed</th>
                    <th>Support Staff</th>
                    <th></th>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <td>1</td>
                        <td>2023-02-05</td>
                        <td>John Doe</td>
                        <td>Emotion</td>
                        <td>White board, Books</td>
                        <td>Doe Jue, Adam Smith</td>
                        <td>
                            <a href="{{route('key-work-detail')}}" class="btn btn-outline-primary btn-sm text-center"  class="btn btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>

                        </td>
                    </tr>
                </x-slot>
                <x-slot name="paginate"></x-slot>
        </x-general.table-card>
</div>
