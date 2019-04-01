<?php echo $__env->make('layouts.elements', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Start Header -->
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End Header -->
<div id="main" class="shell">
<div class="container">
  <h1>Congratzz!!</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <h3>Your Order can't be confirmed. Your order of " <?php echo e($book->book_title); ?> " of author <?php echo e($book->book_author); ?> cant be accepted right now. You can order maximum <?php echo e($book->book_number); ?> copy of thid book. Sorry for the Problem!<h3>
            </div>
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
