<div class="form-group">
    <label><?php echo e($label, false); ?></label>
    <input style="width: 100%" <?php echo $attributes; ?> />
    <?php echo $__env->make('admin::actions.form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/actions/form/date.blade.php ENDPATH**/ ?>