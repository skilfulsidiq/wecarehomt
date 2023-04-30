<div>

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
                                <td> {{ $data->date }}</td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Name of Young person</td>
                                <td> {{ $data->youngPeople->firstname }} {{ $data->youngPeople->lastname }} </td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Support Staff Present:</td>
                                <td>{{ $data->staff->firstname }} {{ $data->staff->lastname }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <hr>
                <div class="p-2">
                    <h6><b>Area of Focus</b></h6>
                    <p class="p-2">{{ $data->focus }}</p>

                </div>
                 {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Goal and Objectives</b></h6>
                    <ul class="list-group">
                        @forelse ($data->goals as $goal )
                        <li class="list-group-item">{{ $goal }}</li>
                        @empty

                        @endforelse
                    </ul>

                </div>
                {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Outcomes and Achievements</b></h6>
                    <p class="p-2"> {{ implode($data->achievements??[]) }} </p>
                </div>
                {{-- <hr> --}}
                <div class="p-2">
                    <h6><b>Reflection</b></h6>
                    <p class="p-2"> {{ $data->refection }} </p>
                </div>

            </div>
        </div>
    </div>
</div>
