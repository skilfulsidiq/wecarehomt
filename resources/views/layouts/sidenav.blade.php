<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">HouseBox</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
                @includeIf('includes.side_menus.single',['route'=>'home','title'=>'Dashboard','icon'=>'bx bx-home'])

                 {{-- properties --}}
                @includeIf('includes.side_menus.section',['title'=>'Properties'])
                   @includeIf('includes.side_menus.single',['route'=>'add-property-form','title'=>'Add Property','icon'=>'bx bx-plus'])
                   @includeIf('includes.side_menus.single',['route'=>'properties-list','title'=>'All Properties','icon'=>'bx bx-buildings'])

                   @includeIf('includes.side_menus.single',['route'=>'properties-cost','title'=>'Development Cost','icon'=>'bx bx-detail'])
                 {{-- Teneat --}}
                @includeIf('includes.side_menus.section',['title'=>'Tenant'])
                    @includeIf('includes.side_menus.single',['route'=>'tenant-list','title'=>'All Tenants','icon'=>'lni lni-users'])
                    @includeIf('includes.side_menus.single',['route'=>'tenant-payment-history','title'=>'Tenant Payment','icon'=>'bx bx-repeat'])

			</ul>
			<!--end navigation-->
		</div>
