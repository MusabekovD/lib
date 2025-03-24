<?php $__env->startSection('newcontent'); ?>

<div class="container">
    <div class="row">
        <div class="block_header d-flex justify-content-between align-items-end text-center">
            <h3><?php echo e($news->title, false); ?></h3>
        </div>
    </div>
    <div class="row mb-4">
        <img src="<?php echo e($news->getImage(), false); ?>" alt="">
    </div>
    <div class="row">
        <?php echo $news->content; ?>

    </div>	       
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newsingle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/frontend/viewnews.blade.php ENDPATH**/ ?>