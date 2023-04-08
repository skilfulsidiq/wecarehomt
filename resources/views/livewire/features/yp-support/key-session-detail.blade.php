<div>
    <x-general.breadcrum>
        <x-slot name="title">KWS</x-slot>
        <x-slot name="sub_title">Details</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="{{ route('key-work-page') }}" class="btn btn-outline-primary btn-sm"><i
                        class="fas fa-list"></i></a>

                {{-- <a href="#" class="btn btn-outline-primary">Edit Property</a> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    <div class="card">
        <div class="card-body radius-10">
             <button class="btn btn-primary" onclick="printDiv('print-session')"><i class="fas fa-print"></i> Print</button>
             {{-- <button class="btn btn-primary" onclick="createPdf('kws')"><i class="fas fa-print"></i> Print</button> --}}
            <div class="mt-5 document p-5 html-content " id="print-session">
                <h4 class="text-center"><b> Details</b></h4>
                <div>
                    {{-- <h5 class="mb-2">Dear Jon Doe</h5> --}}
                    <p>
                        A key work session for young people in care is an opportunity for our young people to have
a structured engagement with a key worker or a designated person who is responsible for

coordinating their care. The session is focused on identifying the young person&#39;s needs,
goals, and aspirations, as well as addressing any concerns they may have.
                    </p>
                    <p>This can be especially important for our young people, who may have experienced neglect
or trauma and need a safe and supportive space to share their feelings and concerns.</p>
                         <h6>Focus</h6>
                        <p>
                             Emotion
                        </p>
                         <h6>Present Support Staff</h6>
                        <p>
                           Jon Doe, Adam Smith
                        </p>
                        <h6>Summary</h6>
                        <p>
                              As our policy states it is compulsory that we inform you of any significant incidents within 24
                        hours of them occurring
                        </p>

                         <h6>Refelction</h6>
                        <p>
                              As our policy states it is compulsory that we inform you of any significant incidents within 24
                        hours of them occurring
                        </p>
                        <p>
                            Overall, a key work session is a valuable opportunity for young people in care to have their
voices heard, identify their needs and goals, and receive support to achieve them. It is
important that the session is structured, collaborative, and focused on the young person&#39;s
well-being and future success.
                        </p>



                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@push('custom_script')
<script>
        //  function printDiv(id) {

        //     let printElement = document.getElementById(id);
        //     var printWindow = window.open('', 'PRINT');
        //     printWindow.document.write(document.documentElement.innerHTML);
        //     setTimeout(() => { // Needed for large documents
        //         printWindow.document.body.style.margin = '0 0';
        //         printWindow.document.body.innerHTML = printElement.outerHTML;
        //         printWindow.document.close(); // necessary for IE >= 10
        //         printWindow.focus(); // necessary for IE >= 10*/
        //         printWindow.print();
        //         printWindow.close();
        //     }, 1000)
        // }
</script>
@endpush
