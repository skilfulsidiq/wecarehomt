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
    <x-general.form-card>
        <x-slot name="title">Interaction Form</x-slot>

        <x-slot name="form">

            <form wire:submit.prevent='submit'>

                <div class="row">
                        <div class="col-lg-6 col-md-6 mt-2">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input  type="date" wire:model="form.date" class="form-control" >
                                 @error('form.date') <div class="error"> {{ $message }} </div> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">
                            <div class="form-group mt-2" >
                                <label for="">Young Person</label>
                                <select class="form-control select3"  wire:model="form.young_people_id" required>
                                    <option value="">Select</option>
                                      @forelse ($young as $in)
                                    <option value="{{ $in->id }}">{{ $in->firstname }} {{ $in->lastname }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                 @error('form.young_people_id') <div class="error"> {{ $message }} </div> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">
                            <div class="form-group mt-2" >
                                <label for="">Support Staff</label>
                                   <select  class="form-control select2"  wire:model="form.staff_id" >

                                      @forelse ($staff as $in)
                                    <option value="{{ $in->id }}">{{ $in->firstname }} {{ $in->lastname }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                   @error('form.staff_id') <div class="error"> {{ $message }} </div> @enderror

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6mt-2">
                            <div class="form-group mt-2" >
                                <label for="">Focus</label>
                                <select class="form-control select"  wire:model="form.focus" >

                                      @forelse ($focus as $in)
                                    <option value="{{ $in->focus_name }}">{{ $in->focus_name }} </option>
                                    @empty

                                    @endforelse
                                </select>
                                   @error('form.focus') <div class="error"> {{ $message }} </div> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">

                            <div class="form-group" >
                                <label for="">Select Goals</label>
                                <select  class="form-control select"  wire:model="form.goals" multiple>
                                    {{-- <option value="">Select</option> --}}
                                      @forelse ($goals as $in)
                                      <option value="{{ $in->goal_name }}">{{ $in->goal_name }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                   @error('form.goals') <div class="error"> {{ $message }} </div> @enderror

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">
                             <div class="form-group mt-2"  >
                                <label for="">Select Achievement</label>
                                <select  class="form-control select"  wire:model="form.achievements"  multiple>
                                    {{-- <option >Select</option> --}}
                                      @forelse ($outcome as $in)
                                      <option value="{{ $in->outcome_name }}">{{ $in->outcome_name }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                   @error('form.achievements') <div class="error"> {{ $message }} </div> @enderror
                            </div>


                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">

                            <div class="form-group">
                                <label for="">Refelction</label>
                                {{-- <label for="">Focus</label> --}}
                                <textarea id="composition" wire:model="form.refection" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary form-btn-lg ml-5">Submit</button>
                </div>
            </form>
        </x-slot>
    </x-general.form-card>


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
