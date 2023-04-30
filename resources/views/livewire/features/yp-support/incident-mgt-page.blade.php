<div>
 <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">Incident Mgt</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="{{ route('create-incident') }}" class="btn btn-outline-primary">Add Incident</a>
                {{-- <button wire:click="$emit('showModal','features.yp-support.create-incident-form')" class="btn btn-outline-primary">Add Incident</button> --}}
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
                    <th>Young Person</th>
                    <th>Description</th>
                      <th>Staff</th>
                    <th>Consequence</th>
                    {{-- <th>Action Tacke</th> --}}
                    <th></th>
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($results as $n )
                         <td>@includeIf('includes.pagination_number',['app'=>$results])</td>
                         <td>{{ $n->date }}</td>
                         <td>{{ $n->location }}</td>
                        <td>{{ $n->youngPeople->firstname}} {{ $n->youngPeople->firstname}}</td>
                        <td>{{ $n->incident }}</td>
                        <td>{{ $n->staff->firstname}} {{ $n->staff->lastname}}</td>
                        <td>{{ $n->consequence }}</td>
                         <td><a href="{{route('incident-detail-page',$n->slug)}}"><i class="fas fa-eye"></i> </a></td>
                        {{-- <td>{{ $n }}</td> --}}
                    @empty

                    @endforelse

                </x-slot>
                <x-slot name="paginate">
                      {{ $results->links('custom_pagination') }}
                </x-slot>
        </x-general.table-card>

</div>
