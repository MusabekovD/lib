<?php if($help): ?>
<span class="help-block">
    <i class="fa <?php echo e(\Illuminate\Support\Arr::get($help, 'icon'), false); ?>"></i>&nbsp;<?php echo \Illuminate\Support\Arr::get($help, 'text'); ?>

</span>
<?php endif; ?><?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/form/help-block.blade.php ENDPATH**/ ?>