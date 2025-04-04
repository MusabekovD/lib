$('.<?php echo e($trigger, false); ?>').popover({
    html: true,
    container: 'body',
    trigger: 'manual',
    placement: function (context, source) {
        var position = $(source).position();
        if (position.left < 100) return "right";
        if (position.top < 110) return "bottom";
        if ($(window).height() - $(source).offset().top < 370) {
            return 'top';
        }
        return "bottom";
    },
    content: function () {
        var $trigger = $(this);
        var $template = $($('template#'+$(this).data('target')).html());
        <?php echo e($content, false); ?>

        return $template.prop("outerHTML");
    }
}).on('shown.bs.popover', function (e) {

    var $popover = $($(this).data('bs.popover').$tip[0]).find('.ie-content');
    var $display = $(this).parents('.ie-wrap').find('.ie-display');
    var $trigger = $(this);

    $popover.data('display', $display);
    $popover.data('trigger', $trigger);

    <?php echo e($shown ?? '', false); ?>


}).click(function () {
    $('[data-toggle="popover"]').popover('hide');
    $(this).popover('toggle');
});
<?php /**PATH /var/www/vendor/encore/laravel-admin/resources/views/grid/inline-edit/partials/popover.blade.php ENDPATH**/ ?>