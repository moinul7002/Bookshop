<?php echo $__env->make('layouts.elements', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Start Header -->
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End Header -->
<div id="main" class="shell">
<div class="container">
  <h1>Terms And Policies:</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h3>
                        Your Ordered Books will be delivered within 7 days.<br>
                        After Confirming Order, You will get an SMS on your mobile no with a verification Number.
                        You have to use this verification number for confirming your products!
                      </h3>
                            </div>
                            <h4 style="padding-left:390px;padding-top:20px">
                              Total = <?php echo e($cart_info->total_price); ?> tk
                              <a  href="<?php echo e(route('home')); ?>" style="background-color:#53c653;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Continue Ordering</a>
                              <a  href="<?php echo e(route('confirm_order',$cart_info->id)); ?>" style="background-color:#ffa64d;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Confirm Order</a>
                            </h4>
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
