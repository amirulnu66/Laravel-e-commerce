<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</button>

	<div class="navbar-collapse" id="navbar-header-content">
		<ul class="navbar-nav navbar-language-translation mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbar-dropdown-menu-link" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
					<i class="batch-icon batch-icon-book-alt-"></i>
					Dashboard
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbar-dropdown-menu-link">
					<li><a class="dropdown-item" href="#">1</a></li>
					<li><a class="dropdown-item" href="#">2</a></li>
					
				</ul>
			</li>
		</ul>
		
		<ul class="navbar-nav ml-5 navbar-profile">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
					<div class="profile-name">
						{{ Auth::user()->name }}
					</div>
					<div class="profile-picture bg-gradient bg-primary has-message float-right">
						<img src="{{URL::to('admin/assets/img/profile-pic.jpg')}}" width="44" height="44">
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">
					<li><a class="dropdown-item" href="#">Settings</a></li>

					<li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                        </form>
                    </li>
				</ul>
			</li>
		</ul>
	</div>
</nav>