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
				<h3>BOOKS OF THE MONTH</h3>
				<ul>
					<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($book->book_of_the_month == 'YES'): ?>

					<li>
						<div class="product">
							<a href="<?php echo e(route('book_description',$book->id)); ?>" class="info">
								<span class="holder">
									<img class="card-img-top feature-img" src="<?php echo e(asset('uploads/avatars/'.$book->book_image)); ?>" alt="">
									<span class="book-name"><?php echo e($book->book_title); ?></span>
									<span class="author"><?php echo e($book->book_author); ?></span>
									<span class="description">Publish Year:<?php echo e($book->year); ?></span></br>
									<span class="description">Type:<?php echo e($book->book_type); ?></span><br>
									<?php if( book_number($book->id) == 0 ): ?> 	<span class="description" style="color:red">Not Available</span> <?php endif; ?>
								</span>
							</a>
							<?php if( book_number($book->id) != 0 ): ?>
							<a href="	<?php echo e(route('add_to_cart',$book->id)); ?> " class="buy-btn" >Order <span class="price"><span class="low">tk</span><?php echo e($book->book_price); ?><span class="high"></span></span></a>
							<?php else: ?>
							<a href="#" class="buy-btn" style="opacity:0.5">Order <span class="price"><span class="low">tk</span><?php echo e($book->book_price); ?><span class="high"></span></span></a>
							<?php endif; ?>
						</div>
					</li>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			<div id="best-sellers">
				<h3>PEOPLES CHOICE</h3>
				<ul>
					<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($book->feature == 'Peoples Choice'): ?>
						<li>
						<div class="product">
						<?php if( book_number($book->id) != 0 ): ?>
							<a href="<?php echo e(route('add_to_cart',$book->id)); ?>">
						<?php else: ?>
							<a href="#"style="opacity:0.5">
						<?php endif; ?>
								<img class="card-img-top feature-img" src="<?php echo e(asset('uploads/avatars/'.$book->book_image)); ?>" alt="">
								<span class="book-name"><?php echo e($book->book_title); ?></span>
								<span class="author"><?php echo e($book->book_author); ?></span>
								<span class="price"><span class="low">
								<?php if( book_number($book->id) != 0 ): ?>
								tk</span>  <?php echo e($book->book_price); ?></span>
								<?php else: ?>
								Not Available</span></span>
								<?php endif; ?>
							</a>
						</div>
					</li>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>

			<div id="best-sellers">
				<h3>FAVOURITE AUTHOR</h3>
				<ul>
					<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($book->feature == 'Most Searched Author'): ?>
					<li>
						<div class="product">
						<?php if( book_number($book->id) != 0 ): ?>
							<a href="<?php echo e(route('add_to_cart',$book->id)); ?>">
						<?php else: ?>
							<a href="#"style="opacity:0.5">
						<?php endif; ?>
								<img class="card-img-top feature-img" src="<?php echo e(asset('uploads/avatars/'.$book->book_image)); ?>" alt="">
								<span class="book-name"><?php echo e($book->book_title); ?></span>
								<span class="author"><?php echo e($book->book_author); ?></span>
								<span class="price"><span class="low">
								<?php if( book_number($book->id) != 0 ): ?>
								tk</span>  <?php echo e($book->book_price); ?></span>
								<?php else: ?>
								Not Available</span></span>
								<?php endif; ?>
							</a>
						</div>
					</li>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>

			<div id="best-sellers">
				<h3>FOREIGN BOOKS</h3>
				<ul>
					<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($book->country != 'Bengali'): ?>
					<li>
						<div class="product">
						<?php if( book_number($book->id) != 0 ): ?>
							<a href="<?php echo e(route('add_to_cart',$book->id)); ?>">
						<?php else: ?>
							<a href="#"style="opacity:0.5">
						<?php endif; ?>
								<img class="card-img-top feature-img" src="<?php echo e(asset('uploads/avatars/'.$book->book_image)); ?>" alt="">
								<span class="book-name"><?php echo e($book->book_title); ?></span>
								<span class="author"><?php echo e($book->book_author); ?></span>
								<span class="price"><span class="low">
								<?php if( book_number($book->id) != 0 ): ?>
								tk</span>  <?php echo e($book->book_price); ?></span>
								<?php else: ?>
								Not Available</span></span>
								<?php endif; ?>
							</a>
						</div>
					</li>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>


			<div id="best-sellers">
				<h3>Engineering Books</h3>
				<ul>
					<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($book->feature == 'Engineering Books'): ?>
					<li>
						<div class="product">
						<?php if( book_number($book->id) != 0 ): ?>
							<a href="<?php echo e(route('add_to_cart',$book->id)); ?>">
						<?php else: ?>
							<a href="#"style="opacity:0.5">
						<?php endif; ?>
								<img class="card-img-top feature-img" src="<?php echo e(asset('uploads/avatars/'.$book->book_image)); ?>" alt="">
								<span class="book-name"><?php echo e($book->book_title); ?></span>
								<span class="author"><?php echo e($book->book_author); ?></span>
								<span class="price"><span class="low">
								<?php if( book_number($book->id) != 0 ): ?>
								tk</span>  <?php echo e($book->book_price); ?></span>
								<?php else: ?>
								Not Available</span></span>
								<?php endif; ?>
							</a>
						</div>
					</li>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
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
