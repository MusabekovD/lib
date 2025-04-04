<?php $__env->startSection('field'); ?>
    <select name='multiple-select-<?php echo e($name, false); ?>' class="form-control ie-input" multiple>
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option name='multiple-select-<?php echo e($name, false); ?>' value="<?php echo e($option, false); ?>" data-label="<?php echo e($label, false); ?>">&nbsp;<?php echo e($label, false); ?>&nbsp;&nbsp;</option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('assert'); ?>
    <script>
        <?php $__env->startComponent('admin::grid.inline-edit.partials.popover', compact('trigger')); ?>
            <?php $__env->slot('content'); ?>
            $template.find('select>option').each(function (index, option) {
                if($.inArray($(option).attr('value'), $trigger.data('value')) >= 0) {
                    $(option).attr('selected', true);
                }
            });
            <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
    </script>

    <script>
    <?php $__env->startComponent('admin::grid.inline-edit.partials.submit', compact('resource', 'name')); ?>

        <?php $__env->slot('val'); ?>
            var val = [];
            var label = [];
            $popover.find('.ie-input>option:selected').each(function(){
                val.push($(this).val());
                label.push($(this).data('label'));
            });
        <?php $__env->endSlot(); ?>

        $popover.data('display').html(label.join(';'));

    <?php echo $__env->renderComponent(); ?>
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin::grid.inline-edit.comm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/grid/inline-edit/multiple-select.blade.php ENDPATH**/ ?>