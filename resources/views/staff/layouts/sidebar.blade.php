        <!-- Left side bar -->
		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img src="{{asset('template/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo" />
					<img
						src="{{asset('template/vendors/images/deskapp-logo-white.svg')}}"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
					
							<a href="{{url('/dashboard')}}" class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
					
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">EMS</span>
							</a>
							<ul class="submenu">
								<li><a href="{{route('employee.index')}}">Employees</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <!-- Left sidebar ends -->
		<div class="mobile-menu-overlay"></div>