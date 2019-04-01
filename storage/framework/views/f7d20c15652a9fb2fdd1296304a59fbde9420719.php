<div id="sidebar">
	<ul class="categories">
		<li>
			<h4>Categories</h4>
			<ul>
				<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><a href="<?php echo e(route('show_book',$cc->category)); ?>"><?php echo e($cc->category); ?> ( <?php echo e(book_count($cc->category)); ?> )</a></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</li>
		<li>
			<h4>Authors</h4>
			<ul>
				<?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><a href="<?php echo e(route('show_books',$aa->author_name)); ?>"><?php echo e($aa->author_name); ?> ( <?php echo e(book_count_author($aa->author_name)); ?> )</a></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</li>
	</ul>
</div>
