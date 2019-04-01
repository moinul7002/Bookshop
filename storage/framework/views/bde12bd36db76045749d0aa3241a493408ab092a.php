<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3" style="padding-top:20px">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  Stuff Panel
                </div>

                <div class="card-body">
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ii): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    Book Name : <?php echo e(show_books_name($ii->book_id)); ?>  Number of Books : <?php echo e($ii->item_amount); ?>  Price: <?php echo e($ii->price); ?><br>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  Total Price: <?php echo e($info->total_price); ?><br>
                  Status: <?php if($info->received_info != 'received'): ?> Not Received <?php else: ?> Received <?php endif; ?>
                  <br>
                  <br><a class="btn btn-success" href="<?php echo e(route('issue_books',$info->id)); ?>">Confirm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>