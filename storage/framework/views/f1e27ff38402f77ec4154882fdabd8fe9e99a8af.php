<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Admin Panel</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                  Bookshop Admin & Stuff
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('cart_show')); ?>"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                                <span class="badge badge-pill badge-danger" style="position:relative; top:-40px; left:20px">
                                  <?php if(Auth::user()): ?>
                                  <?php echo e(item_amount_in_cart()); ?>

                                  <?php endif; ?>
                                </span>
                            </li>

                        <?php else: ?>
                        <?php if(Auth::user()->status == 'admin'): ?>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo e(route('user_edit')); ?>" style="margin:5px"><?php echo e(__('User Edit')); ?></a>
                            </li>
                          <?php endif; ?>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo e(route('add_books')); ?>" style="margin:5px"><?php echo e(__('Add Books')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo e(route('book_info')); ?>" style="margin:5px"><?php echo e(__('Edit Books')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo e(route('show_stuff')); ?>" style="margin:5px"><?php echo e(__('Issue Books')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo e(route('home')); ?>" style="margin:5px"><?php echo e(__('Home')); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative;padding-left:50px;" v-pre>
                                    <img src="/uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" style="width:32px;height:32px;position:absolute;top:10px;left:10px;border-radius:50%" >
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="<?php echo e(route('profile_show')); ?>">
                                      <?php echo e(__('Profile')); ?>

                                  </a>
                                  <?php if(Auth::user()->status == 'admin'): ?>


                                  <?php endif; ?>


                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
