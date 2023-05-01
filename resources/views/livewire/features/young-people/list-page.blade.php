<div>
 <x-general.breadcrum>
        <x-slot name="title">Young People</x-slot>
        <x-slot name="sub_title">All</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                {{-- <a href="{{route('meaningful-form-page')}}" class="btn btn-outline-primary">Add Interaction</a> --}}
                {{-- <button wire:click="$emit('showModal','features.yp-support.create-interaction-form')" class="btn btn-outline-primary">Add Interaction</button> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <x-general.table-card>
                <x-slot name="title">Young People List</x-slot>
                <x-slot name="search"> @includeIf('includes.search_bar') </x-slot>
                <x-slot name="export"></x-slot>
                <x-slot name="thead">
                    <th>s/n</th>
                    <th>Firstname</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Disability</th>
                    <th>Action</th>
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($data as  $n)
                          <tr>
                         <td>@includeIf('includes.pagination_number',['app'=>$data])</td>
                        <td>{{ $n->firstname }}</td>
                        <td>{{ $n->lastname}}</td>
                        <td>{{ $n->dob }}</td>
                        <td>{{ $n->gender}}</td>
                        <td>{{ $n->disability}}</td>
                        {{-- <td>{{ $n->staff_id }}</td> --}}
                        <td>
                            {{-- <a href="{{route('meaningful-detail-page',$n->slug)}}" class="btn btn-outline-primary btn-sm text-center"> <i class="fas fa-eye"></i> </a> --}}
                        </td>
                    </tr>
                    @empty

                    @endforelse

                </x-slot>
                <x-slot name="paginate">
                     {{ $data->links('custom_pagination') }}
                </x-slot>
        </x-general.table-card>
</div>
