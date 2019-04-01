<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <?php if(Auth::user()->status=='admin'): ?>
                        <table style="border-collapse: collapse;width: 100%;">
                        <tr style="border: 1px solid #dddddd;text-align: left;padding: 8px;font-size:20px;color: gray">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($data->name); ?></th>
                            <th><?php echo e($data->email); ?></th>
                            <th><?php echo e($data->mobile_no); ?></th>
                            <th><?php echo e($data->location); ?></th>
                            <th><?php echo e($data->status); ?></th>
                            <th><a class="btn btn-success" href="<?php echo e(route('edit_user',$data->id)); ?>">Edit</a></th>
                            <th><a class="btn btn-success" href="<?php echo e(route('delete_user',$data->id)); ?>">Delete</a></th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                                <?php elseif(Auth::user()->status=='stuff'): ?>
                                   <  Checkout Stuff Here ! >
                                <?php else: ?>
                                     <  users info here !S >
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>