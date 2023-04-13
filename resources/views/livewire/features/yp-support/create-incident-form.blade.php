<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Incident</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
               <form wire:submit.prevent='submit' data-parsley-validate>

                <div class="row">
                        <div class="mt-2">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input wire:ignore.self type="date" wire:model.lazy="form.date" class="form-control" required>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="form-group mt-2">
                                <label for="">Support Staff</label>
                                <select wire:ignore.self  class="form-control multiple-select" wire:model.lazy="form.support" multiple>
                                    <option value="Jon Doe">Jon Doe</option>
                                    <option value="Adam Smith">Adam Smith</option>
                                </select>
                            </div>
                        </div>

                        <div class=" mt-2">

                            <div class="form-group">
                                <label for="">Description of the Incident</label>
                                 <select wire:ignore.self  class="form-control multiple-select" wire:model.lazy="form.support" multiple>
                                    <option value="Jon Doe">Police Report</option>
                                    <option value="Adam Smith">Injuries</option>
                                    <option value="Adam Smith">Car Accident</option>
                                </select>
                                {{-- <label for="">Focus</label> --}}
                                {{-- <textarea  id="composition" wire:model.lazy="form.goal" class="form-control"></textarea> --}}
                            </div>
                        </div>
                        <div class="mt-2">

                            <div class="form-group">
                                <label for="">Consequences</label>
                                {{-- <label for="">Focus</label> --}}
                                <textarea  id="composition" wire:model.lazy="form.acheivement" class="form-control"></textarea>
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
        </div>

    </div>
</div>
