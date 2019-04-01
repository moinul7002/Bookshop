<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2" style="padding-top:20px">
          <a href="<?php echo e(route('view_category')); ?>" class="btn btn-success" style="margin:5px">Add Category</a><br>
          <a href="<?php echo e(route('view_author')); ?>" class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a href="<?php echo e(route('view_publisher')); ?>" class="btn btn-success" style="margin:5px">Add Publication</a><br>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  Add Category
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('edit_feature_done',$data->id)); ?>" aria-label="<?php echo e(__('add_category')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group row">
                            <label for="feature" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Feature Name')); ?></label>

                            <div class="col-md-6">
                                <input id="feature" type="text" class="form-control<?php echo e($errors->has('feature') ? ' is-invalid' : ''); ?>" name="feature" value="<?php echo e($data->feature); ?>" >

                                <?php if($errors->has('feature')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('feature')); ?></strong>
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