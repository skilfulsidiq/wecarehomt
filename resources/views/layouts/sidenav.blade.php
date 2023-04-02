<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Synadmin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
                @includeIf('includes.side_menus.single',['route'=>'home','title'=>'Dashboard','icon'=>'fas fa-home'])

                 {{-- properties --}}
                @includeIf('includes.side_menus.section',['title'=>'Properties'])
                   @includeIf('includes.side_menus.single',['route'=>'add-property-form','title'=>'Add Property','icon'=>'fas fa-home'])
                   @includeIf('includes.side_menus.single',['route'=>'properties-list','title'=>'All Properties','icon'=>'fas fa-home'])
                 {{-- Teneat --}}
                @includeIf('includes.side_menus.section',['title'=>'Tenant'])
                   {{-- @includeIf('includes.side_menus.single',['route'=>'add-property-form','title'=>'Add Property','icon'=>'fas fa-home'])
                   @includeIf('includes.side_menus.single',['route'=>'properties-list','title'=>'All Properties','icon'=>'fas fa-home']) --}}
			</ul>
			<!--end navigation-->
		</div>
