<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Edit User')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('user_edit_done')); ?>" aria-label="<?php echo e(__('user_edit_done')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($data->name); ?>" disabled>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e($data->email); ?>" disabled>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mobile_no')); ?></label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" value="<?php echo e($data->mobile_no); ?>" disabled>

                                <?php if($errors->has('mobile_no')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Location')); ?></label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control<?php echo e($errors->has('location') ? ' is-invalid' : ''); ?>" name="location" value="<?php echo e($data->location); ?>" disabled>

                                <?php if($errors->has('location')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('location')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Status')); ?></label>

                            <div class="col-md-6">
                                <?php if($data->status == 'admin'): ?>
                                    <select id="status" type="text" class="form-control<?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>" name="status">
                                        <option value="admin" selected="selected">Admin</option>
                                        <option value="stuff">Stuff</option>
                                        <option value="user">User</option>
                                    </select>
                                <?php elseif($data->status == 'stuff'): ?>
                                    <select id="status" type="text" class="form-control<?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>" name="status">
                                        <option value="admin">Admin</option>
                                        <option value="stuff" selected="selected">Stuff</option>
                                        <option value="user">User</option>
                                    </select>
                                <?php else: ?>
                                    <select id="status" type="text" class="form-control<?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>" name="status">
                                        <option value="admin">Admin</option>
                                        <option value="stuff">Stuff</option>
                                        <option value="user" selected="selected">User</option>
                                    </select>
                                <?php endif; ?>

                                <?php if($errors->has('status')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('status')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <input type="hidden" name="id_no" id="id_no" value="<?php echo e($data->id); ?>">
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