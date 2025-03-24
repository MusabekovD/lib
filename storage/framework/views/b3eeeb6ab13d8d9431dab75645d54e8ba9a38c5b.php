<?php $__env->startSection('content'); ?>
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services " class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row ">

                <div class="col-md-12 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-md-12  mb-5">
                            <div class="box-container">
                                <h3 class="text-center"><?php echo e($news->title, false); ?></h3>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12  mb-5">
                            <div class="box-container">

                                <?php echo $news->content; ?>

                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Featured Services Section -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.single', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/front/viewnews.blade.php ENDPATH**/ ?>