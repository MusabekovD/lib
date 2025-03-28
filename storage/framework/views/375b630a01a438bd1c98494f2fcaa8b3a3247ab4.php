<input type="checkbox" class="<?php echo e($class, false); ?>" <?php echo e($checked, false); ?> data-key="<?php echo e($key, false); ?>" />

<script>
    $('.<?php echo e($class, false); ?>').bootstrapSwitch({
        size:'mini',
        onText: '<?php echo e($states['on']['text'], false); ?>',
        offText: '<?php echo e($states['off']['text'], false); ?>',
        onColor: '<?php echo e($states['on']['color'], false); ?>',
        offColor: '<?php echo e($states['off']['color'], false); ?>',
        onSwitchChange: function(event, state){

            $(this).val(state ? <?php echo e($states['on']['value'], false); ?> : <?php echo e($states['off']['value'], false); ?>);

            var key = $(this).data('key');
            var value = $(this).val();
            var _status = true;

            $.ajax({
                url: "<?php echo e($resource, false); ?>/" + key,
                type: "POST",
                async:false,
                data: {
                    "<?php echo e($name, false); ?>": value,
                    _token: LA.token,
                    _method: 'PUT',
                    _edit_inline: true
                },
                success: function (data) {
                    if (data.status)
                        toastr.success(data.message);
                    else
                        toastr.warning(data.message);
                },
                error: function (xhr, textStatus, errorThrown) {
                    _status = false;
                    var data = xhr.responseJSON
                    if (data['errors'] || data['message']) {
                        var message = data['message'] || Object.values(data['errors']).join("\n");
                        toastr.error(message);
                    } else {
                        toastr.error('Error: ' + errorThrown);
                    }
                },
                complete:function(xhr,status) {
                    if (status == 'success')
                        _status = xhr.responseJSON.status;
                }
            });

            return _status;
        }
    });
</script>
<?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/grid/inline-edit/switch.blade.php ENDPATH**/ ?>