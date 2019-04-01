<?php echo $__env->make('layouts.elements', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Start Header -->
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End Header -->
<div id="main" class="shell">
<div class="container">
    <div class="row">
        <div class="col-md-10 call-md-offset-1">
            <img src="/uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" style="width:100px;height:100px;float:left;border-radius:50%; margin-right:50px" >
            <h4><?php echo e(Auth::user()->name); ?>'s profile </h2>
            <form enctype="multipart/form-data" action="<?php echo e(route('upload_profile_pic')); ?>" method="POST" >
              <label> Upload Profile Image</label></p>
              <input type="file" name="avatar">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>


      </p></p></p>
      <div class="row" style="padding-top:20px">
        <?php $__currentLoopData = $cart_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($cc->order_info == 'ordered'): ?>
           <br><br><br>
           <div style="width:600px;border:1px solid #000;">
            <p style="background:#003399;color:white;padding-top:6px">On <?php echo e($cc->updated_at); ?> --------- Received: <?php if($cc->received_info != 'received'): ?> NO <?php else: ?> YES <?php endif; ?> </p>
            <?php $__currentLoopData = $cart_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p style="background:#ccffcc;">
              <?php if($cc->id == $ca->card_id): ?>
                * Book: <?php echo e(show_books_name($ca->book_id)); ?>  Amount: <?php echo e($ca->item_amount); ?>  Price: <?php echo e($ca->price); ?><br>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <p style="background:#ff6666;color:white;padding-top:6px">Total Price: <?php echo e($cc->total_price); ?></p>
          <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      </div>
    </div>
  </div>
  <!-- End Main -->
  <!-- Footer -->
  <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- End Footer -->
  </body>
  </html>
