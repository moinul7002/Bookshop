<body>
	<?php if(Auth::user()): ?>
		<?php echo e(cart_info_check()); ?>

	<?php endif; ?>
	<!-- Header -->
	<div id="header" class="shell">
		<div>
			<h1><a href="<?php echo e(route('front_page')); ?>">Online Bookshop</a></h1>
		</div>
		<br>
		<!-- Navigation -->
		<div id="navigation" style="background:#000080;width:100%;position:center;">
			<ul>
				<li>
					<form action="<?php echo e(route('search_result')); ?>" method="POST">
						<?php echo e(csrf_field()); ?>

					<input id="search" name="search" style="width:400px;padding-top:5px"/>
					<button type="submit">Search</button>
				</form>
				</li>
				<li><a href="<?php echo e(route('front_page')); ?>" style="color:white;padding-left:70px">Home</a></li>
				<?php if(Auth::user()): ?>
					<?php if(Auth::user()->status == 'admin'): ?>
						<li><a href="<?php echo e(route('book_info')); ?>" style="color:white;">Admin Panel</a></li>
					<?php elseif(Auth::user()->status == 'stuff'): ?>
						<li><a href="<?php echo e(route('show_stuff')); ?>" style="color:white">Stuff Panel</a></li>
					<?php endif; ?>
				<?php endif; ?>
				<li><a href="#" style="color:white">About us</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
		<div class="cl">&nbsp;</div>
		<!-- Login-details -->

		<div id="login-details">
			<?php if(Auth::user()): ?>
			<p>Welcome, <a href="<?php echo e(Route('profile_show')); ?>" id="user"><?php echo e(Auth::user()->name); ?></a> .</p>
			<p><a class="dropdown-item" href="<?php echo e(route('logout')); ?>" style="background-color:#ff1a1a;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;"
				 onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
					<?php echo e(__('Logout')); ?>

			</a></p>
			<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
					<?php echo csrf_field(); ?>
			</form>
			<?php else: ?>
			<p><a href="<?php echo e(route('login')); ?>" id="user" style="background-color:#4d4dff;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;margin:2px">Login</a></p>
      <p><a href="<?php echo e(route('register_user')); ?>" id="user" style="background-color:#00cc66;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;margin:2px">Register</a></p>
			<?php endif; ?>
			<p style="margin:2px">
				<a href="<?php echo e(route('cart_show')); ?>" class="cart" ><img src="/css/images/cart-icon.png" alt="" /></a>
			Shopping Cart
			<?php if(Auth::user()): ?>
			( <?php echo e(item_amount_in_cart()); ?> )
			<?php else: ?>
			(0)
			<?php endif; ?>
			<a href="#" class="sum">
				<?php if(Auth::user()): ?>
				<?php echo e(total_price_in_cart()); ?>tk
				<?php else: ?>
				0.0tk
				<?php endif; ?>
			</a>
		</p>
		</div>
		<!-- End Login-details -->
	</div>
