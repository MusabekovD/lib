<canvas id="myChart" width="100%" style="max-height: 650px;"></canvas>
<script>
    $(function() {
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php $__currentLoopData = $sql30; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item30): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($item30->date_appoinment, false); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                datasets: [{
                    label: 'Kiritilgan kitob soni',
                    data: [
                    <?php $__currentLoopData = $sql30; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item30): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($item30->soni, false); ?>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script><?php /**PATH /var/www/resources/views/chart/statisadded.blade.php ENDPATH**/ ?>