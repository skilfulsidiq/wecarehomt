<div class="page-breadcrumb d-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">{{$title}}</div>
    {{-- d-none d-sm-flex --}}
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-none d-sm-flex  mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$sub_title}}</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
      {{$right}}
    </div>
</div>
