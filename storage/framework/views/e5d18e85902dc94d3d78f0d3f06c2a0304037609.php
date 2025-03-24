<?php $__env->startSection('content'); ?>
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services " class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row ">
                <div class="col-md-3 mb-5 mb-lg-0">
                    <div class="list-group">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="https://lib.jdpu.uz/library?category=<?php echo e($item->id, false); ?>" class="list-group-item list-group-item-action">
                                <?php echo e($item->name, false); ?> (<?php echo e($item->books_count, false); ?>)
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-9 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-md-4  mb-5">
                            <div class="box-container">
                                <img src="<?php echo e($books->getImage(), false); ?>" class="img-fluid" alt="<?php echo e($books->title, false); ?>">
                            </div>
                        </div>
                        <div class="col-md-8 mb-5">
                            <h4 class="mb-5"><?php echo e($books->title, false); ?></h4>
                            <h6><b>Muallif:</b> <?php echo e($books->muallif->name, false); ?></h6>
                            <h6><b>Til:</b> <?php echo e($books->lang->name, false); ?></h6>
                            <h6><b>Yozuv:</b> <?php echo e($books->read_lang(), false); ?></h6>
                            <h6><b>Nashiryot:</b> <?php echo e($books->publishing->name, false); ?></h6>
                            <h6><b>Nashr yili:</b> <?php echo e($books->b_published_year, false); ?></h6>
                            <h6><b>Ko'rishlar soni:</b> <?php echo e($books->view_count, false); ?></h6>
                            <br />
                            <div class="d-flex">
                                <a class="btn btn-primary mr-3" target="_blank" href="<?php echo e($books->getFile(), false); ?>" role="button">Yuklab olish</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12  mb-5">
                            <div class="box-container">
                                <?php echo e($books->desc, false); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Featured Services Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.single', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/library/lesson/view.blade.php ENDPATH**/ ?>