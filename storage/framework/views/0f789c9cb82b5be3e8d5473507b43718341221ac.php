<?php $__env->startSection('content'); ?>
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services " class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row ">
                <div class="col-md-3 mb-5 mb-lg-0">
                    <div class="list-group">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/library?category=<?php echo e($item->id, false); ?>"
                                class="list-group-item list-group-item-action">
                                <?php echo e($item->name, false); ?> (<?php echo e($item->books_count, false); ?>)
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-9 mb-5 mb-lg-0">
                    <form action="">
                        <div class="input-group mb-3">
                            <input name="search" type="text" class="form-control" placeholder="Kitob nomini kiriting"
                                aria-label="Kitob nomini kiriting" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Qidirish</button>
                            </div>
                        </div>
                    </form>
                    <div class="row row-eq-height library">
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 mb-5">
                                <a href="<?php echo e(route('viewbook', ['id' => $item->id]), false); ?>" class="card">
                                    <img class="card-img-top" src="<?php echo e($item->getImage(), false); ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="card-title"> <?php echo e($item->title, false); ?></h6>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php echo $books->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Featured Services Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.single', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/library/lesson/index.blade.php ENDPATH**/ ?>