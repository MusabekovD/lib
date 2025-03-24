<table class="table table-hover">
    <thead>
        <th>№</th>
        <th>Kalit so'z</th>
        <th>Soni</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $stat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$key, false); ?></td>
            <td><?php echo e($item->keyword, false); ?></td>
            <td><?php echo e($item->count_using, false); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table><?php /**PATH /var/www/resources/views/chart/keyword.blade.php ENDPATH**/ ?>