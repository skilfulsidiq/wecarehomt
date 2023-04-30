<div>

    <div class="card">
        <div class="card-body radius-10">
              <button class="btn btn-primary" onclick="printDiv('incident')"><i class="fas fa-print"></i> Print</button>
            <div class="mt-5 document p-5" id="incident">
                <h4 class="text-center"><b>Incident Details</b></h4>
                <div>
                    <h5 class="mb-2">Dear Jon Doe</h5>
                    <p>
                        I am writing to you to inform you that an incident took place today involving your young person.
                    </p>
                    <p>
                        As our policy states it is compulsory that we inform you of any significant incidents within 24
                        hours of them occurring. This is because the report can help demonstrate that proper
                        procedures were followed, and that appropriate action was taken in response to an
                        incident.
                    </p>
                    <p>
                        The report can also help to ensure that everyone involved in the situation is aware of what
                        happened and what actions were taken.
                    </p>


                </div>
                <div class="row">
                    <div class="">
                        <table class="table ">
                            <tr>
                                <td style="width:20rem">Date</td>
                                <td> {{ $data->date }}</td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Description of the Incident</td>
                                <td>{{$data->incident}}</td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Consequences</td>
                                <td>{{ $data->consequence }}</td>
                            </tr>
                            <tr>
                                <td style="width:20rem">Actions Taken</td>
                                <td>{{ $data->action }}</td>
                            </tr>

                        </table>

                        <p>
                            In line with our principles of continuous improvement, this Incident reports can be used to
                            analyse patterns or trends. By reviewing incident reports over time, an organization can
                            identify areas for improvement and make changes to prevent future incidents.
                        <p>
                            We will use this report to evaluate the and reflect on how effective, our procedures have
                            been. By reviewing incident reports and assessing how incidents were handled, an
                            organization can identify areas where policies or procedures need to be revised or updated.
                        </p>
                        <p>For further information please feel free to contact us on …………….</p>


                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
