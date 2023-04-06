
<div class="modal-dialog {{$fullscreen}}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="{{ __('bap.close') }}"></button>
            </div>
            <div class="modal-body">
                {{$body}}
            </div>
            <div class="modal-footer">
                {{$footer}}
            </div>
        </div>
</div>
