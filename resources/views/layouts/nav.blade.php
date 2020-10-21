<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
		
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				<li><a href="{{ route('departments.index') }}">Departments</a></li>
				<li><a href="{{ route('roles.index') }}">Roles</a></li>
		
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							Vacancy
						</a>

						<ul class="dropdown-menu">
							<li><a href="{{ route('v') }}"><i class="fa fa-btn fa-add-rooms"></i>Add Vacancy</a></li>
							<li><a href="{{ route('vacancyview') }}"><i class="fa fa-btn fa-add-rooms"></i>View Vacancy Details</a></li>	
			
							
						</ul>
					</li>

				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							rooms
						</a>

						<ul class="dropdown-menu">
							<li><a href="{{ route('rooms') }}"><i class="fa fa-btn fa-add-rooms"></i>Add Rooms</a></li>
							<li><a href="{{ route('RoomView') }}"><i class="fa fa-btn fa-add-rooms"></i>View & Update rooms</a></li>	
			
							
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							Bookings
						</a>

						<ul class="dropdown-menu">
							<li><a href="{{ route('BookingView') }}"><i class="fa fa-btn fa-add-rooms"></i>View Bookings</a></li>
							<li><a href="{{ route('payment') }}"><i class="fa fa-btn fa-add-rooms"></i>Final Payment</a></li>
			
							
						</ul>
					</li>

					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							Attendance
						</a>

						<ul class="dropdown-menu">
							<li><a href="{{ route('s') }}"><i class="fa fa-btn fa-add-rooms"></i>Update Attendance</a></li>
							<li><a href="{{ route('all') }}"><i class="fa fa-btn fa-add-rooms"></i>View attendance</a></li>	
							<li><a href="{{ route('attendance') }}"><i class="fa fa-btn fa-add-rooms"></i>Attendance Report</a></li>
							
						</ul>
					</li>

				<li><a href="{{ route('employees.index') }}">Payroll</a></li>	
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							Income
						</a>

						<ul class="dropdown-menu">
							<li><a href="{{ route('income.create') }}"><i class="fa fa-btn fa-add-rooms"></i>Monthly Income</a></li>
							<li><a href="{{ route('income.annualIncome') }}"><i class="fa fa-btn fa-add-rooms"></i>Annual Income</a></li>	
			
							
						</ul>
					</li>				
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@guest
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
					
				@else
					<li><a href="{{ route('home') }}">Dashboard</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}"
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
				@endguest
			</ul>
		</div>
	</div>
</nav>