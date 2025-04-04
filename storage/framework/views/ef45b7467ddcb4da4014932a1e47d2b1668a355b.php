<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <textarea name="<?php echo e($name, false); ?>" class="form-control <?php echo e($class, false); ?>" rows="<?php echo e($rows, false); ?>" placeholder="<?php echo e($placeholder, false); ?>" <?php echo $attributes; ?> ><?php echo e(old($column, $value), false); ?></textarea>

        <?php echo $append; ?>


        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/form/textarea.blade.php ENDPATH**/ ?>