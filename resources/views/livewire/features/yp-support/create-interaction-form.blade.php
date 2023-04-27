<div>
    <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">Form</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="{{ route('meaningful-page') }}" class="btn btn-outline-primary btn-sm"><i
                        class="fas fa-list"></i></a>
                {{-- <button wire:click="$emit('showModal','features.yp-support.create-interaction-form')" class="btn btn-outline-primary">Add Interaction</button> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
    {{-- <x-general.modal-card>
        <x-slot name="fullscreen">modal-full-screen</x-slot>
        <x-slot name="title">Interaction Form</x-slot>
        <x-slot name="body">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            <label for="">Young Person</label>
                            <select name="" id="" class="form-control single-select">
                                <option value="j">Jon Doe</option>
                                <option value="j">Adam Smith</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6"></div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">Interaction List</x-slot>
    </x-general.modal-card> --}}
    <x-general.form-card>
        <x-slot name="title">Interaction Form</x-slot>

        <x-slot name="form">

            <form wire:submit.prevent='submit' data-parsley-validate>

                <div class="row">
                        <div class="col-lg-6 col-md-6 mt-2">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input wire:ignore.self type="date" wire:model.lazy="form.date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">
                            <div class="form-group mt-2">
                                <label for="">Young Person</label>
                                <select wire:ignore.self class="form-control single-select" wire:model="form.young" required>
                                    <option value="Jon Doe">Jon Doe</option>
                                    <option value="Adam Smith">Adam Smith</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">
                            <div class="form-group mt-2">
                                <label for="">Support Staff</label>
                                <select wire:ignore.self  class="form-control multiple-select" wire:model.lazy="form.support" multiple>
                                      {{-- @forelse ($staff as $in)
                                    <option value="{{ $in->id }}">{{ $in->firstname }} {{ $in->lastname }}</option>
                                    @empty

                                    @endforelse --}}
                                    <option value="Jon Doe">Jon Doe</option>
                                    <option value="Adam Smith">Adam Smith</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6mt-2">
                            <div class="form-group mt-2">
                                <label for="">Focus</label>
                                <select wire:ignore.self class="form-control multiple-select" wire:model.lazy="form.focus" multiple>
                                    <option value="e">EET</option>
                                    <option value="p">Emotional Wellbeing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">

                            <div class="form-group">
                                <label for="">List Goal and Object(itemize by new line)</label>
                                {{-- <label for="">Focus</label> --}}
                                <textarea  id="composition" wire:model.lazy="form.goal" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">

                            <div class="form-group">
                                <label for="">List Outcome and Achievement(itemize by new line)</label>
                                {{-- <label for="">Focus</label> --}}
                                <textarea  id="composition" wire:model.lazy="form.acheivement" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">

                            <div class="form-group">
                                <label for="">Refelction</label>
                                {{-- <label for="">Focus</label> --}}
                                <textarea id="composition" wire:model.lazy="form.reflection" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="d-flex justify-content-center mt-5">
                    {{-- @if ($step > 1)
                        <button type="button" class="btn btn-outline-primary form-btn-lg" wire:click="goBack">
                            Back</button>
                    @endif --}}
                    <button type="submit" class="btn btn-primary form-btn-lg ml-5">Submit</button>
                </div>
            </form>
        </x-slot>
    </x-general.form-card>


</div>
@push('custom_script')
    <script src="https://cdn.tiny.cloud/1/rwksx53ly5tiprv8w0oxm5efm7dnzqf5g1bkavv3erg1riu2/tinymce/6.4.1-16/tinymce.min.js">
    </script>
    {{-- <script src="{{ asset('assets/plugins/tinymice.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/nicedit.js') }}"></script> --}}
    <script>
        tinymce.init({
        //     selector: '#composition'
        // });
        // bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
        //   bkLib.onDomLoaded(function(){
        //   var myInstance = new nicEditor().panelInstance('composition');
        // });
    </script>
@endpush
