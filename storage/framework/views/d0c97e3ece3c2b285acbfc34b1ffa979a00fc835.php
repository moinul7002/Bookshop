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
                    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('stuff_book_check')); ?>" aria-label="<?php echo e(__('user_edit_done')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="verification_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Verification No')); ?></label>

                            <div class="col-md-6">
                                <input id="verification_no" type="text" class="form-control<?php echo e($errors->has('verification_no') ? ' is-invalid' : ''); ?>" name="verification_no" >

                                <?php if($errors->has('verification_no')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('verification_no')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Check')); ?>

                                </button>
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