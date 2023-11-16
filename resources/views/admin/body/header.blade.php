<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="{{ !empty($profileData->photo) ? 
                                url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								
                                <ul class="list-unstyled p-1">
                                    @if(auth()->user()->role === 'manager')
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('manager.profile') }}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>My Profile</span>
                                        </a>
                                    </li>
                                    @elseif(auth()->user()->role === 'staff')
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('staff.profile') }}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>My Profile</span>
                                        </a>
                                    </li>
                                    @elseif(auth()->user()->role === 'customer')
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('customer.profile') }}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>My Profile</span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(auth()->user()->role === 'manager')
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('manager.change.password') }}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="key"></i>
                                        <span>Password</span>
                                        </a>
                                    </li>
                                    @elseif(auth()->user()->role === 'staff')
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('staff.change.password') }}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="key"></i>
                                        <span>Password</span>
                                        </a>
                                    </li>
                                    @elseif(auth()->user()->role === 'customer')
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('customer.change.password') }}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="key"></i>
                                        <span>Password</span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(auth()->user()->role === 'manager')
                                    <li class="dropdown-item py-2">
                                        <a href="{{route('manager.logout')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="log-out"></i>
                                        <span>Log Out</span>
                                        </a>
                                    </li>
                                    @elseif(auth()->user()->role === 'staff')
                                    <li class="dropdown-item py-2">
                                        <a href="{{route('staff.logout')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="log-out"></i>
                                        <span>Log Out</span>
                                        </a>
                                    </li>
                                    @elseif(auth()->user()->role === 'customer')
                                    <li class="dropdown-item py-2">
                                        <a href="{{route('customer.logout')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="log-out"></i>
                                        <span>Log Out</span>
                                        </a>
                                    </li>
                                    @endif

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
</nav>