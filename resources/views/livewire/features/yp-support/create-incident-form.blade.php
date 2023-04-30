<div>
      <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">Incident Form</x-slot>
        <x-slot name="right">
            <div class="me-auto d-print-none">
                <a href="{{ route('meaningful-page') }}" class="btn btn-outline-primary btn-sm"><i
                        class="fas fa-list"></i></a>
                {{-- <button wire:click="$emit('showModal','features.yp-support.create-interaction-form')" class="btn btn-outline-primary">Add Interaction</button> --}}
            </div>
        </x-slot>
    </x-general.breadcrum>
   <div class="row">
    <div class="col-lg-6 offset-lg-3">
         <x-general.form-card>
        <x-slot name="title">Incident Form</x-slot>

        <x-slot name="form">
             <form wire:submit.prevent='submit' data-parsley-validate>

                <div class="row">
                        <div class="mt-2">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input wire:ignore.self type="datetime-local" wire:model.lazy="form.date" class="form-control" required>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="form-group">
                                <label for="">Location</label>
                                <input type="text" wire:model.lazy="form.location" class="form-control" required>
                                   @error('form.location') <div class="error"> {{ $message }} </div> @enderror
                            </div>
                        </div>
                         <div class=" mt-2">
                            <div class="form-group " wire:ignore>
                                <label for="">Young Person</label>
                                <select class="form-control select2"  wire:model.lazy="form.young_people_id" required>

                                      @forelse ($young as $in)
                                    <option value="{{ $in->id }}">{{ $in->firstname }} {{ $in->lastname }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                 @error('form.young_people_id') <div class="error"> {{ $message }} </div> @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="form-group mt-2" wire:ignore>
                                    <label for="">Support Staff</label>
                                    <select wire:ignore.self  class="form-control select2" wire:model.lazy="form.staff_id" >

                                        @forelse ($staff as $in)
                                        <option value="{{ $in->id }}">{{ $in->firstname }} {{ $in->lastname }}</option>
                                        @empty

                                        @endforelse
                                        {{-- <option value="Jon Doe">Jon Doe</option>
                                        <option value="Adam Smith">Adam Smith</option> --}}
                                    </select>
                                    @error('form.staff_id') <div class="error"> {{ $message }} </div> @enderror
                                </div>
                            </div>

                            <div class=" mt-2">

                                <div class="form-group" wire:ignore>
                                    <label for="">Select Incident</label>
                                    <select wire:ignore.self  class="form-control select2" wire:model.lazy="form.incident" >
                                        {{-- <option value="">Select</option> --}}
                                        @forelse ($incident as $in)
                                        <option value="{{ $in->incident_desc }}">{{ $in->incident_name }}</option>
                                        @empty

                                        @endforelse
                                    </select>
                                    {{-- <label for="">Focus</label> --}}
                                    {{-- <textarea  id="composition" wire:model.lazy="form.goal" class="form-control"></textarea> --}}
                                    @error('form.incident') <div class="error"> {{ $message }} </div> @enderror
                                </div>
                            </div>
                            <div class="mt-2">

                                <div class="form-group" wire:ignore>
                                    <label for="">Consequences</label>
                                    <select   class="form-control select2" wire:model.lazy="form.consequence" >
                                        {{-- <option value="">Select</option> --}}
                                        @forelse ($cons as $in)
                                        <option value="{{ $in->consequence_desc }}">{{ $in->consequence_name }}</option>
                                        @empty

                                        @endforelse
                                        {{-- <option value="Jon Doe">Police Report</option>
                                        <option value="Adam Smith">Injuries</option>
                                        <option value="Adam Smith">Car Accident</option> --}}
                                    </select>
                                    @error('form.consequence') <div class="error"> {{ $message }} </div> @enderror
                                {{-- <label for="">Focus</label> --}}
                                {{-- <textarea  id="composition" wire:model.lazy="form.acheivement" class="form-control"></textarea> --}}
                            </div>
                        </div>
                        <div class="mt-2">

                            <div class="form-group">
                                <label for="">Action Taken</label>
                                {{-- <label for="">Focus</label> --}}
                                <textarea id="composition" wire:model.lazy="form.action" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="d-flex justify-content-center mt-2 mb-5">
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
   </div>



</div>
@push("custom_script")
<script>
      $(document).ready(function() {
            //  $('.select2').select2();
              $('.select2').select2({});

            //   $(document).on('change', '.select2', function (e) {
            //  //when ever the value of changes this will update your PHP variable
            //         @this.set('id_to', e.target.value);
            //     });




        });

</script>
@endpush
