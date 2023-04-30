<div>
   <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">Interaction details</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="{{ route('meaningful-page') }}" class="btn btn-outline-primary btn-sm"><i
                        class="fas fa-list"></i></a>
                {{-- <button wire:click="$emit('showModal','features.yp-support.create-interaction-form')" class="btn btn-outline-primary">Add Interaction</button> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <div class="card">
        <div class="card-body radius-10">
             <button class="btn btn-primary" onclick="printDiv('doc')"><i class="fas fa-print"></i> Print</button>
            <div class="mt-5 document" id="doc">
                <h4 class="text-center"><b>Meaningful interaction</b></h4>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped table-condensed">
                            <tr>
                                <td style="width:20rem">Date</td>
                                <td> {{ $details->date }}</td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Name of Young person</td>
                                <td> {{ $details->youngPeople->firstname }} {{ $details->youngPeople->lastname }} </td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Support Staff Present:</td>
                                <td>{{ $details->staff->firstname }} {{ $details->staff->lastname }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <hr>
                <div class="p-2">
                    <h6><b>Area of Focus</b></h6>
                    <p class="p-2">{{ $details->focus }}</p>

                </div>
                 {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Goal and Objectives</b></h6>
                    <ul class="list-group">
                        @forelse ($details->goals as $goal )
                        <li class="list-group-item">{{ $goal }}</li>
                        @empty

                        @endforelse
                    </ul>

                </div>
                {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Outcomes and Achievements</b></h6>
                    <p class="p-2"> {{ implode($details->achievements??[]) }} </p>
                </div>
                {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Reflection</b></h6>
                    <p class="p-2"> {{ $details->refection }} </p>
                </div>

            </div>
        </div>
    </div>
</div>
