<?php $menus = \App\Models\MenuFrontend::nested()->get(); ?>
<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="/">JDPU ARM</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($item['child']) > 0): ?>
                        <li class="drop-down"><a href="<?php echo e($item['link'], false); ?>"><?php echo e($item['title'], false); ?></a>
                            <ul>
                                <?php $__currentLoopData = $item['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($subitem['link'], false); ?>"><?php echo e($subitem['title'], false); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li><a href="<?php echo e($item['link'], false); ?>"><?php echo e($item['title'], false); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
<?php /**PATH /var/www/resources/views/widgets/header.blade.php ENDPATH**/ ?>