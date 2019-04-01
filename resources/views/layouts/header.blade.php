<body>
	@if(Auth::user())
		{{ cart_info_check() }}
	@endif
	<!-- Header -->
	<div id="header" class="shell">
		<div>
			<h1><a href="{{ route('front_page') }}">Online Bookshop</a></h1>
		</div>
		<br>
		<!-- Navigation -->
		<div id="navigation" style="background:#000080;width:100%;position:center;">
			<ul>
				<li>
					<form action="{{ route('search_result') }}" method="POST">
						{{ csrf_field() }}
					<input id="search" name="search" style="width:400px;padding-top:5px"/>
					<button type="submit">Search</button>
				</form>
				</li>
				<li><a href="{{ route('front_page') }}" style="color:white;padding-left:70px">Home</a></li>
				@if(Auth::user())
					@if(Auth::user()->status == 'admin')
						<li><a href="{{ route('book_info') }}" style="color:white;">Admin Panel</a></li>
					@elseif(Auth::user()->status == 'stuff')
						<li><a href="{{ route('show_stuff') }}" style="color:white">Stuff Panel</a></li>
					@endif
				@endif
				<li><a href="#" style="color:white">About us</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
		<div class="cl">&nbsp;</div>
		<!-- Login-details -->

		<div id="login-details">
			@if(Auth::user())
			<p>Welcome, <a href="{{ Route('profile_show') }}" id="user">{{ Auth::user()->name }}</a> .</p>
			<p><a class="dropdown-item" href="{{ route('logout') }}" style="background-color:#ff1a1a;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;"
				 onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
			</a></p>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
			</form>
			@else
			<p><a href="{{ route('login') }}" id="user" style="background-color:#4d4dff;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;margin:2px">Login</a></p>
      <p><a href="{{ route('register_user') }}" id="user" style="background-color:#00cc66;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;margin:2px">Register</a></p>
			@endif
			<p style="margin:2px">
				<a href="{{ route('cart_show') }}" class="cart" ><img src="/css/images/cart-icon.png" alt="" /></a>
			Shopping Cart
			@if(Auth::user())
			( {{ item_amount_in_cart() }} )
			@else
			(0)
			@endif
			<a href="#" class="sum">
				@if(Auth::user())
				{{ total_price_in_cart() }}tk
				@else
				0.0tk
				@endif
			</a>
		</p>
		</div>
		<!-- End Login-details -->
	</div>
