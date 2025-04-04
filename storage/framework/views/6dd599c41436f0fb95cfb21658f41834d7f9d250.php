<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <textarea class="<?php echo e($class, false); ?>" id="<?php echo e($id, false); ?>"
                  name="<?php echo e($name, false); ?>" <?php echo $attributes; ?> ><?php echo e(old($column, $value), false); ?></textarea>
        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /var/www/vendor/super-eggs/laravel-admin-tinymce/resources/views/editor.blade.php ENDPATH**/ ?>