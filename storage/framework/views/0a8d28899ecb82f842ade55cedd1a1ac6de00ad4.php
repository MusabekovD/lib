<table class="table table-hover">
    <thead>
        <th>№</th>
        <th>Kitob nomi</th>
        <th>Soni</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $likeBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$key, false); ?></td>
            <td><?php echo e($item->book->title, false); ?></td>
            <td>1</td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table><?php /**PATH /var/www/resources/views/chart/appeals.blade.php ENDPATH**/ ?>