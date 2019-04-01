<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3" style="padding-top:20px">
          <a class="btn btn-primary" style="margin:5px">Add Category</a><br>
          <a class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a class="btn btn-success" style="margin:5px">Add Publication</a><br>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  Add Category
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('edit_category_done',$data->id)); ?>" aria-label="<?php echo e(__('add_category')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group row">
                            <label for="book_type" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Book Type')); ?></label>

                            <div class="col-md-6">
                                <input id="book_type" type="text" class="form-control<?php echo e($errors->has('book_type') ? ' is-invalid' : ''); ?>" name="book_type" value="<?php echo e($data->category); ?>" >

                                <?php if($errors->has('book_type')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_type')); ?></strong>
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