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
					<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<div class="product">
							<a href="<?php echo e(route('add_to_cart',$book->id)); ?>" class="info">
								<span class="holder">
									<img class="card-img-top feature-img" src="<?php echo e(asset('uploads/avatars/'.$book->book_image)); ?>" alt="">
									<span class="book-name"><?php echo e($book->book_title); ?></span>
									<span class="author"><?php echo e($book->book_author); ?></span>
									<span class="description">Publish Year:<?php echo e($book->year); ?></span></br>
									<span class="description">Type:<?php echo e($book->book_type); ?></span>
								</span>
							</a>
							<a href="	<?php echo e(route('add_to_cart',$book->id)); ?> " class="buy-btn">Order <span class="price"><span class="low">tk</span><?php echo e($book->book_price); ?><span class="high"></span></span></a>
						</div>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
