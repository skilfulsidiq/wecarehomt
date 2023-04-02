<div class="text-muted">
    {{ __('bap.per_page') }}:
    <div class="mx-2 d-inline-block">
        <div class="btn-group btn-group-sm w-100">
            <div class="mx-2 d-inline-block">
                <div class="btn-group btn-group-sm w-100">
                    <button type="button" wire:click="setPerPage(10)"
                        class="btn @if ($perPage == 10) btn-primary @endif">10</button>
                    <button type="button" wire:click="setPerPage(15)"
                        class="btn @if ($perPage == 15) btn-primary @endif">15</button>
                    <button type="button" wire:click="setPerPage(20)"
                        class="btn @if ($perPage == 20) btn-primary @endif">20</button>
                    <button type="button" wire:click="setPerPage(25)"
                        class="btn @if ($perPage == 25) btn-primary @endif">25</button>
                </div>
            </div>
        </div>
    </div>


</div>
