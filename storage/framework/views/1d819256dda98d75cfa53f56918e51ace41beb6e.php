<div <?php echo $attributes; ?> >
    <?php if(isset($title)): ?>
    <h4><?php echo e($title, false); ?></h4>
    <?php endif; ?>
    <?php echo $content; ?>

</div><?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/widgets/callout.blade.php ENDPATH**/ ?>