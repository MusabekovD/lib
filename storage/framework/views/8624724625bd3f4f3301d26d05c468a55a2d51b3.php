<div class="form-group">
    <label><?php echo e($label, false); ?></label>
    <input type="file" class="<?php echo e($class, false); ?>" name="<?php echo e($name, false); ?>[]" <?php echo $attributes; ?> multiple/>
    <?php echo $__env->make('admin::actions.form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/actions/form/muitplefile.blade.php ENDPATH**/ ?>