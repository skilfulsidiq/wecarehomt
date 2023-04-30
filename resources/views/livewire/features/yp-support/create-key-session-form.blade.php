<div>
    <x-general.breadcrum>
        <x-slot name="title">YP Support</x-slot>
        <x-slot name="sub_title">KW Form</x-slot>
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
        <x-slot name="title">KW Form</x-slot>

        <x-slot name="form">
               <form wire:submit.prevent='submit' data-parsley-validate>

                <div class="row">
                    <div class="mt-2">
                        <div class="form-group">
                            <label for="">Date</label>
                            <input wire:ignore.self type="date" wire:model.lazy="form.date" class="form-control"
                                required>
                                 @error('form.date') <div class="error"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="form-group mt-2">
                            <label for="">Support Staff</label>
                            <select wire:ignore.self class="form-control multiple-select" wire:model.lazy="form.support_staff"
                                >
                                <option value="Jon Doe">Jon Doe</option>
                                <option value="Adam Smith">Adam Smith</option>
                            </select>
                             @error('form.support_staff') <div class="error"> {{ $message }} </div> @enderror
                        </div>
                    </div>

                    <div class=" mt-2">

                        <div class="form-group">
                            <label for="">Description of the Incident</label>
                            {{-- <label for="">Focus</label> --}}
                            <textarea id="composition" wire:model.lazy="form.goal" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="mt-2">

                        <div class="form-group">
                            <label for="">Consequences</label>
                            {{-- <label for="">Focus</label> --}}
                            <textarea id="composition" wire:model.lazy="form.acheivement" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="mt-2">

                        <div class="form-group">
                            <label for="">Action Taken</label>
                            {{-- <label for="">Focus</label> --}}
                            <textarea id="composition" wire:model.lazy="form.reflection" class="form-control"></textarea>
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
