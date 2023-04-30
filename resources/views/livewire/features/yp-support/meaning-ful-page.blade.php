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
                    @forelse ($results as  $n)
                          <tr>
                         <td>@includeIf('includes.pagination_number',['app'=>$results])</td>
                        <td>{{ $n->date }}</td>
                        <td>{{ $n->youngPeople->firstname}} {{ $n->youngPeople->firstname}}</td>
                        <td>{{ $n->focus }}</td>
                        <td>{{ $n->staff->firstname}} {{ $n->staff->lastname}}</td>
                        {{-- <td>{{ $n->staff_id }}</td> --}}
                        <td>
                            <a href="{{route('meaningful-detail-page',$n->slug)}}" class="btn btn-outline-primary btn-sm text-center"> <i class="fas fa-eye"></i> </a>
                        </td>
                    </tr>
                    @empty

                    @endforelse

                </x-slot>
                <x-slot name="paginate">
                     {{ $results->links('custom_pagination') }}
                </x-slot>
        </x-general.table-card>
</div>
