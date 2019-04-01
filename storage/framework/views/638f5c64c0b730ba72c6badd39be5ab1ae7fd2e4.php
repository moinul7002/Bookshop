<?php echo $__env->make('layouts.elements', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Start Header -->
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End Header -->

<!-- Main -->
	<div id="main" class="shell">
<!-- Sidebar -->
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End Sidebar -->
		<!-- Content -->
<div id="content">
			<!-- Products -->
			<div class="products">
				<h3>Books</h3>
				<ul>
					<li>

									<img class="card-img-top feature-img" src="<?php echo e(asset('uploads/avatars/'.$books->book_image)); ?>" alt="" style="width:160px;height:300px">
									<br><br>
									<p>Book Name: <?php echo e($books->book_title); ?></p>
									<p>Book Author: <?php echo e($books->book_author); ?></p>
									<p>Publish Year:<?php echo e($books->year); ?></p></br>
									<p>Type:<?php echo e($books->book_type); ?></p>
									<p>Price:<?php echo e($books->book_price); ?>tk</p>

							<a href="	<?php echo e(route('add_to_cart',$books->id)); ?> " class="buy-btn" style="background-color:#ff1a1a;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Order<span class="high"></span></span></a>

					</li>
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			<!-- End Best-sellers -->
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
	</div>
<!-- End Main -->

<!-- Footer -->
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End Footer -->

</body>
</html>
