<?php $menus = \App\Models\MenuFrontend::nested()->get(); ?>

<nav class="navbar navbar-expand-xl" aria-label="Seventh navbar example">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e('/', false); ?>"><img src="<?php echo e(asset('newassets/img/logo.png'), false); ?>"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl"
            aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleXxl">
            <ul class="navbar-nav mx-auto mb-2 mb-xl-0">
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($item['child']) > 0): ?>
                        <li class="nav-item me-3 dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo e($item['link'], false); ?>" data-bs-toggle="dropdown"
                                aria-expanded="false"><?php echo e($item['title'], false); ?></a>
                            <ul class="dropdown-menu">
                                <?php $__currentLoopData = $item['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item"
                                            href="<?php echo e($subitem['link'], false); ?>"><?php echo e($subitem['title'], false); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item me-3">
                            <a class="nav-link" aria-current="page" href="<?php echo e($item['link'], false); ?>"><?php echo e($item['title'], false); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item me-3">
                    <?php if(!Auth::guard('students')->check() && !Auth::guard('employees')->check()): ?>
                        <a style="background-color: white; border-radius: 5px;" class="nav-link" aria-current="page"
                            href="<?php echo e(route('loginstudent'), false); ?>">
                            Tizimga kirish
                        </a>
                    <?php else: ?>
                <li class="nav-item me-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if(Auth::guard('students')->check()): ?>
                            <?php echo e(Auth::guard('students')->user()->name, false); ?>

                        <?php else: ?>
                            <?php echo e(Auth::guard('employees')->user()->name, false); ?>

                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="text-center">
                            <a class="text-danger" href="<?php echo e(route('logout-student'), false); ?>">Tizimdan chiqish</a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                </li>


            </ul>

        </div>
    </div>
</nav>
<?php /**PATH /var/www/resources/views/widgets/newheader.blade.php ENDPATH**/ ?>