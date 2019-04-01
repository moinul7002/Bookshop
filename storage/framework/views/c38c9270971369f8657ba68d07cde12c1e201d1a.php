<?php echo $__env->make('layouts.elements', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Start Header -->
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End Header -->
<div id="main" class="shell">
<div class="container">
  <h1>Items On Cart:</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <table style="border-collapse: collapse;width: 100%;">
                        <tr style="border: 1px solid #dddddd;text-align: left;padding: 8px;font-size:20px;color: gray">
                            <th>Book Name</th>
                            <th>Author Name</th>
                            <th>Price</th>
                            <th>Book Amount</th>
                        </tr>
                        <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(show_books_name($data->book_id)); ?></td>
                            <td><?php echo e(show_books_author($data->book_id)); ?></td>
                            <td><?php echo e($data->price); ?> tk</td>
                            <td>
                            <form action="<?php echo e(route('change_item_amount',[$cart_info->id,$data->book_id])); ?>" method="post">
                              <?php echo e(csrf_field()); ?>

                              <input type="number" name="amount" id="amount" value="<?php echo e($data->item_amount); ?>" style="width:100px">
                              <button type="submit" class="btn btn-success" style="background-color:#53c653;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Change</button>
                              <a class="btn btn-success" href="<?php echo e(route('delete_book',[$cart_info->id,$data->book_id] )); ?> " style="background-color:#ff1a1a;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Delete</a>
                            </form>
                          </td>
                        </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                            <h4 style="padding-left:390px;padding-top:20px">
                              Total = <?php echo e($cart_info->total_price); ?> tk
                              <a  href="<?php echo e(route('home')); ?>" style="background-color:#53c653;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Continue Ordering</a>
                              <a  href="<?php echo e(route('confirm_preorder')); ?>" style="background-color:#ffa64d;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Confirm Order</a>
                            </h2>
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
