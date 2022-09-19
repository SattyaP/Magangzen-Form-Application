 <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ url('admin/dashboard') }}">
                <span class="brand-name">Magangzen Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">              
			  
			  <li  class="has-sub expand active">
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#auth"
						aria-expanded="false" aria-controls="auth">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Users &amp; Roles</span> <b class="caret"></b>
					</a>
					<ul class="collapse show"  id="auth"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="active" >
								<a class="sidenav-item-link" href="{{ url('admin/users')}}">
								<span class="nav-text">Users</span>
								</a>
							</li>
							<li class="">
								<a class="sidenav-item-link" href="{{ url('admin/roles')}}">
								<span class="nav-text">Roles</span>
								</a>
							</li>
						</div>
					</ul>
				</li>
				<li class="has-sub expand active">
 					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#group" aria-expanded="false" aria-controls="group"><i class="mdi mdi-settings"></i><span class="nav-text">Groups</span> <b class="caret"></b>
					</a>
					<ul class="collapse show" id="group" data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li class="active">
								<a class="sidenav-item-link" href="{{ url('admin/groups') }}"><span class="nav-text">Groups</span></a>
							</li>
						</div>
					</ul>
				</li>         
			  </ul>
            </div>
          </div>
        </aside>