<?php
use App\Models\News;
$News = News::orderBy('pubdate', 'desc')
->take(4)
->get();
?>
<style>
    .post-title{
        height:66px;
         overflow:hidden;
         text-overflow:ellipsis
    }
.post-item{
    height: 100px;
    overflow-y: hidden;
    text-overflow: ellipsis
} 
</style>

<?php $__env->startSection('newcontent'); ?>

<div class="container">
    <div class="row">
        <div class="block_header d-flex justify-content-between align-items-end">
            <h3>Yangiliklar</h3>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-4">
            <article class="blog-post-item">
                <a href="<?php echo e(route('viewnews', ['slug' => $item->slug]), false); ?>">
                    <img width="299" height="168" src="<?php echo e($item->getImage(), false); ?>" class="size-default-news">
                </a>
                <div class="post-title">
                    <h5><a href="<?php echo e(route('viewnews', ['slug' => $item->slug]), false); ?>" class="post-title"><?php echo e($item->title, false); ?></a></h5>	
                </div>		
                <div class="post-item"><?php echo e($item->short_content, false); ?></div>
                <a href="<?php echo e(route('viewnews', ['slug' => $item->slug]), false); ?>" class="more-btn">Batafsil</a>
            </article>
        </div>		        	
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   	
                    

    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo e($news->links(), false); ?>

        </div>
    </div>		       
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newsingle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/frontend/newsall.blade.php ENDPATH**/ ?>