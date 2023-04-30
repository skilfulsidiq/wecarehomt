<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					{{-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> --}}
				</div>
				<div>
					<h4 class="logo-text">We Care Home</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
                @includeIf('includes.side_menus.single',['route'=>'home','title'=>'Dashboard','icon'=>'bx bx-home'])

                 {{-- Yp support --}}
                @includeIf('includes.side_menus.section',['title'=>'YP Support'])
                   @includeIf('includes.side_menus.single',['route'=>'meaningful-page','title'=>'Interactions','icon'=>'bx
bx-comment-detail'])
                   @includeIf('includes.side_menus.single',['route'=>'incident-mgt-page','title'=>'Incident Mgt','icon'=>'bx bx-camera-home'])
                   @includeIf('includes.side_menus.single',['route'=>'key-work-page','title'=>'Key Work Sessions','icon'=>'bx bx-detail'])
                     {{-- induction --}}
                   {{-- @includeIf('includes.side_menus.section',['title'=>'induction'])
                   @includeIf('includes.side_menus.single',['route'=>'soft-book-page','title'=>'Soft Handbook','icon'=>'bx bx-plus'])
                   @includeIf('includes.side_menus.single',['route'=>'sign-off-page','title'=>'Sign Off Sheet','icon'=>'bx bx-buildings'])
                   @includeIf('includes.side_menus.single',['route'=>'policy-page','title'=>'Policy','icon'=>'bx bx-detail'])
                   {{-- personal dev --}}
                   {{-- @includeIf('includes.side_menus.section',['title'=>'Personal Development'])
                   @includeIf('includes.side_menus.single',['route'=>'training-hub-page','title'=>'Training Hub','icon'=>'bx bx-plus']) --}}
                   {{-- young people --}}
                   @includeIf('includes.side_menus.section',['title'=>'Young People'])
                   @includeIf('includes.side_menus.single',['route'=>'young-list-page','title'=>'All','icon'=>'bx bx-plus'])

			</ul>
			<!--end navigation-->
		</div>
