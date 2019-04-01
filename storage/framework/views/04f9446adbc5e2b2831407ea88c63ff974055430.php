<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2" style="padding-top:20px">
          <a href="<?php echo e(route('view_category')); ?>" class="btn btn-success" style="margin:5px">Add Category</a><br>
          <a href="<?php echo e(route('view_author')); ?>" class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a href="<?php echo e(route('view_publisher')); ?>" class="btn btn-success" style="margin:5px">Add Publication</a><br>
          <a href="<?php echo e(route('view_country')); ?>" class="btn btn-success" style="margin:5px">Add Country</a><br>
          <a href="<?php echo e(route('view_feature')); ?>" class="btn btn-success" style="margin:5px">View Feature</a><br>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  Edit Books
                </div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('edit_books_done',$data->id)); ?>" aria-label="<?php echo e(__('add_category')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group row">
                            <label for="book_isbn" class="col-md-4 col-form-label text-md-right"><?php echo e(__('ISBN')); ?></label>

                            <div class="col-md-6">
                                <input id="book_isbn" type="text" class="form-control<?php echo e($errors->has('book_isbn') ? ' is-invalid' : ''); ?>" name="book_isbn" value="<?php echo e($data->book_isbn); ?>" >

                                <?php if($errors->has('book_isbn')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_isbn')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="feature" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                              <select id="book_type" type="text" class="form-control<?php echo e($errors->has('book_type') ? ' is-invalid' : ''); ?>" name="book_type" value="<?php echo e(old('book_type')); ?>" required autofocus>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cc->category); ?>" <?php if($data->book_type == $cc->category): ?> selected <?php endif; ?> ><?php echo e($cc->category); ?></option>
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
                            <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>

                            <div class="col-md-6">
                              <select id="country" type="text" class="form-control<?php echo e($errors->has('country') ? ' is-invalid' : ''); ?>" name="country" value="<?php echo e(old('country')); ?>" required autofocus>
                                    <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cc->country); ?>" <?php if($data->country == $cc->country): ?> selected <?php endif; ?> ><?php echo e($cc->country); ?></option>
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
                            <label for="book_of_the_month" class="col-md-4 col-form-label text-md-right">Book Of The Month</label>

                            <div class="col-md-6">
                              <input id="book_of_the_month" type="text" class="form-control<?php echo e($errors->has('book_of_the_month') ? ' is-invalid' : ''); ?>" name="book_of_the_month" value="<?php echo e($data->book_of_the_month); ?>" >

                                <?php if($errors->has('book_of_the_month')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_of_the_month')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="feature" class="col-md-4 col-form-label text-md-right">Feature</label>

                            <div class="col-md-6">
                              <select id="feature" type="text" class="form-control<?php echo e($errors->has('feature') ? ' is-invalid' : ''); ?>" name="feature" value="<?php echo e(old('feature')); ?>" required autofocus>
                                    <?php $__currentLoopData = $feature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cc->feature); ?>" <?php if($data->feature == $cc->feature): ?> selected <?php endif; ?> ><?php echo e($cc->feature); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>

                                <?php if($errors->has('feature')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('feature')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_title" class="col-md-4 col-form-label text-md-right">Book Title</label>

                            <div class="col-md-6">
                                <input id="book_title" type="text" class="form-control<?php echo e($errors->has('book_title') ? ' is-invalid' : ''); ?>" name="book_title" value="<?php echo e($data->book_title); ?>" >

                                <?php if($errors->has('book_title')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="book_author" class="col-md-4 col-form-label text-md-right">Author</label>

                            <div class="col-md-6">
                              <select id="book_author" type="text" class="form-control<?php echo e($errors->has('book_author') ? ' is-invalid' : ''); ?>" name="book_author" required autofocus>
                                    <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($aa->author_name); ?>" <?php if($aa->author_name == $data->book_author): ?> selected <?php endif; ?> ><?php echo e($aa->author_name); ?></option>
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
                            <label for="book_description" class="col-md-4 col-form-label text-md-right">Book Description</label>

                            <div class="col-md-6">
                                <input id="book_description" type="text" class="form-control<?php echo e($errors->has('book_description') ? ' is-invalid' : ''); ?>" name="book_description" value="<?php echo e($data->book_description); ?>" >

                                <?php if($errors->has('book_description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>

                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control<?php echo e($errors->has('year') ? ' is-invalid' : ''); ?>" name="year" value="<?php echo e($data->year); ?>" >

                                <?php if($errors->has('year')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('year')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="book_image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                              <input type="file" name="book_image" value="$data->book_image">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publication" class="col-md-4 col-form-label text-md-right">Publication</label>

                            <div class="col-md-6">
                              <select id="publication" type="text" class="form-control<?php echo e($errors->has('publication') ? ' is-invalid' : ''); ?>" name="publication" required autofocus>
                                    <?php $__currentLoopData = $publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pp->publisher_name); ?>" <?php if($pp->publisher_name == $data->publication): ?> selected <?php endif; ?> ><?php echo e($pp->publisher_name); ?></option>
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
                            <label for="book_price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="book_price" type="text" class="form-control<?php echo e($errors->has('book_price') ? ' is-invalid' : ''); ?>" name="book_price" value="<?php echo e($data->book_price); ?>" >

                                <?php if($errors->has('book_price')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('book_price')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="book_number" class="col-md-4 col-form-label text-md-right">Book Number</label>

                            <div class="col-md-6">
                                <input id="book_number" type="text" class="form-control<?php echo e($errors->has('book_number') ? ' is-invalid' : ''); ?>" name="book_number" value="<?php echo e($data->book_number); ?>" >

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