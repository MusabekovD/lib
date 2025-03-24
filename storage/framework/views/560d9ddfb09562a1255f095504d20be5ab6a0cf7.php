<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($myTest->topic->title, false); ?> - <?php echo e($myTest->student->fio, false); ?> </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h1 class="my-5"><?php echo e($myTest->student->fio, false); ?> <small class="text-muted"><?php echo e($myTest->student->work, false); ?></small></h1>
            </div>
            <div class="col col-12">
                <div class="alert alert-info"><b><?php echo e($myTest->topic->title, false); ?></b>
                    <hr><b><?php echo e($myTest->student->fio, false); ?></b>
                    <hr><b>Savollar soni: </b> <?php echo e($myTest->questionCount(), false); ?>

                    <hr><b>Boshlanish vaqti: </b> <?php echo e($myTest->created_at, false); ?>

                    <hr><b>Tamomlanish vaqti: </b> <?php echo e(date('Y-m-d h:i:s', strtotime($myTest->created_at . ' +' . $myTest->topic->t_time . ' minutes')), false); ?> <span class="badge badge-danger">+<?php echo e($myTest->topic->t_time, false); ?></span>
                    <hr><b>Tugallangan vaqti: </b> <?php echo e($myTest->updated_at, false); ?>

                </div>
            </div>
            <?php
                $increment = 0;
            ?>
            <?php $__currentLoopData = $myTest->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $increment++;
            ?>
            <div class="col col-12">
                <div id="<?php echo e($answer->question_id, false); ?>" class="alert alert-<?php echo e($answer->correct==0 ? 'danger' : 'success', false); ?>">
                    <b><?php echo e($increment, false); ?>. <?php echo e($answer->question->question_text, false); ?></b>

                    <hr><b>Sizning javobingiz: </b> <?php echo e($answer->myvarint->option, false); ?> <?php echo e($answer->correct==0 ? '❌' : '✅', false); ?>


                    <hr><b>To'g'ri javob: </b>
                    <?php $__currentLoopData = $answer->question->rights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rightItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($rightItem->option, false); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                    <hr><b><?php echo e($answer->created_at, false); ?> </b>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>

</html><?php /**PATH /var/www/resources/views/test/results.blade.php ENDPATH**/ ?>