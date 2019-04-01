<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2" style="padding-top:20px">
          <a class="btn btn-primary" style="margin:5px">Add Category</a><br>
          <a class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a class="btn btn-success" style="margin:5px">Add Publication</a><br>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  Add Category
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('edit_publisher_done',$data->id)); ?>" aria-label="<?php echo e(__('add_category')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group row">
                            <label for="publisher_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Publisher Name')); ?></label>

                            <div class="col-md-6">
                                <input id="publisher_name" type="text" class="form-control<?php echo e($errors->has('publisher_name') ? ' is-invalid' : ''); ?>" name="publisher_name" value="<?php echo e($data->publisher_name); ?>" >

                                <?php if($errors->has('publisher_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('publisher_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Update')); ?>

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