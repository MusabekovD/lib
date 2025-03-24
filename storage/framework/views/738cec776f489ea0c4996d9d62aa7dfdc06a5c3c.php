<?php
use App\Models\News;
$News = News::orderBy('pubdate', 'desc')
->take(4)
->get();
?>


<?php $__env->startSection('content'); ?>

    <section style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center mb-4">Yangiliklar</h3>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 mb-5">
                        <a href="<?php echo e(route('viewnews', ['slug' => $item->slug]), false); ?>" class="card">
                            <img class="card-img-top" src="<?php echo e($item->getImage(), false); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title"> <?php echo e($item->title, false); ?></h6>
                                <p class="card-text"><?php echo e($item->short_content, false); ?></p>

                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo e($news->links(), false); ?>

                </div>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.single', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/front/newsall.blade.php ENDPATH**/ ?>