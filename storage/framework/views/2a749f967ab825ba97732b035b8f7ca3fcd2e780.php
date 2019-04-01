<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3" style="padding-top:20px">
          <a href="<?php echo e(route('view_category')); ?>" class="btn btn-success" style="margin:5px">Add Category</a><br>
          <a href="<?php echo e(route('view_author')); ?>" class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a href="<?php echo e(route('view_publisher')); ?>" class="btn btn-success" style="margin:5px">Add Publication</a><br>
          <a href="<?php echo e(route('view_country')); ?>" class="btn btn-success" style="margin:5px">Add Country</a><br>
          <a href="<?php echo e(route('view_feature')); ?>" class="btn btn-success" style="margin:5px">View Feature</a><br>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  Add Books
                </div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('add_books_done')); ?>" aria-label="<?php echo e(__('user_edit_done')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="isbn" class="col-md-4 col-form-label text-md-right"><?php echo e(__('ISBN No')); ?></label>

                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control<?php echo e($errors->has('isbn') ? ' is-invalid' : ''); ?>" name="isbn" >

                                <?php if($errors->has('isbn')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('isbn')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_type" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Book Type')); ?></label>

                            <div class="col-md-6">
                              <select id="book_type" type="text" class="form-control<?php echo e($errors->has('book_type') ? ' is-invalid' : ''); ?>" name="book_type" required autofocus>
                                      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($cat->category); ?>" ><?php echo e($cat->category); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>

                                <?php if($errors->has('book_type')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_type')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Country')); ?></label>

                            <div class="col-md-6">
                              <select id="country" type="text" class="form-control<?php echo e($errors->has('country') ? ' is-invalid' : ''); ?>" name="country" required autofocus>
                                      <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($cat->country); ?>" ><?php echo e($cat->country); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>

                                <?php if($errors->has('country')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('country')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Book Name')); ?></label>

                            <div class="col-md-6">
                                <input id="book_name" type="text" class="form-control<?php echo e($errors->has('book_name') ? ' is-invalid' : ''); ?>" name="book_name"  >

                                <?php if($errors->has('book_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_author" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Author')); ?></label>

                            <div class="col-md-6">
                              <select id="author_name" type="text" class="form-control<?php echo e($errors->has('author_name') ? ' is-invalid' : ''); ?>" name="author_name" required autofocus>
                                      <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($aa->author_name); ?>" ><?php echo e($aa->author_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>

                                <?php if($errors->has('book_author')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_author')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Publish Year')); ?></label>

                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control<?php echo e($errors->has('year') ? ' is-invalid' : ''); ?>" name="year" >

                                <?php if($errors->has('year')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('year')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Image')); ?></label>

                            <div class="col-md-6">
                              <input type="file" name="image">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                <?php if($errors->has('image')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description"  >

                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publication" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Publication')); ?></label>

                            <div class="col-md-6">
                              <select id="publication" type="text" class="form-control<?php echo e($errors->has('publication') ? ' is-invalid' : ''); ?>" name="publication" required autofocus>
                                      <?php $__currentLoopData = $publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($aa->publisher_name); ?>" ><?php echo e($aa->publisher_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>

                                <?php if($errors->has('publication')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('publication')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Price')); ?></label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control<?php echo e($errors->has('price') ? ' is-invalid' : ''); ?>" name="price"  >

                                <?php if($errors->has('price')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('price')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_number" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Book_number')); ?></label>

                            <div class="col-md-6">
                                <input id="book_number" type="text" class="form-control<?php echo e($errors->has('book_number') ? ' is-invalid' : ''); ?>" name="book_number"  >

                                <?php if($errors->has('book_number')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_number')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Add')); ?>

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