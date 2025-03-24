<?php
use App\Models\Books;
$books = Books::take(8)->get();
?>
<section style="padding: 50px 0;background: #f1f6fe;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mb-4">Yangi qo'shilgan adabiyotlar</h3>
            </div>
        </div>
        <div class="row">
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
    </div>

</section>
<?php /**PATH /var/www/resources/views/widgets/newslib.blade.php ENDPATH**/ ?>