<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <input type="file" class="<?php echo e($class, false); ?>" name="<?php echo e($name, false); ?>[]" <?php echo $attributes; ?> />
        <?php if(isset($sortable)): ?>
        <input type="hidden" class="<?php echo e($class, false); ?>_sort" name="<?php echo e($sort_flag."[$name]", false); ?>"/>
        <?php endif; ?>

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/form/multiplefile.blade.php ENDPATH**/ ?>