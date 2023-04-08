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
                                <td> 20-04-2023</td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Name of Young person</td>
                                <td>Adam Smith</td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Support Staff Present:</td>
                                <td>Smith Jow, Alo Roy</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <hr>
                <div class="p-2">
                    <h6><b>Area of Focus</b></h6>
                    <p class="p-2">ismy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

                </div>
                 {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Goal and Objectives</b></h6>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>

                </div>
                {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Outcomes and Achievements</b></h6>
                    <p class="p-2">ismy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

                </div>
                {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Reflection</b></h6>
                    <p class="p-2">ismy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

                </div>

            </div>
        </div>
    </div>
</div>
