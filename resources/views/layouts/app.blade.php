<x-layouts.base>

<div class="wrapper">
    @if(in_array(request()->route()->getName(), ['login', 'forgot' ]))
        <div class="authentication-header"></div>
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="assets/images/logo-img.png" width="180" alt="" />
						</div>
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="page-wrapper">
        @includeIf('layouts.sidenav')
        @includeIf('layouts.nav')
			<div class="page-content">
           {{ $slot }}
            </div>
    </div>
    @endif

</div>


</x-layouts.base>
