<?php $__env->startSection('newcontent'); ?>
    <div class=" container">
        <div class=" row d-flex justify-content-center">
            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error'), false); ?>

                </div>
            <?php endif; ?>



            <div class="col-4 card m-2 p-4">
                <h4 class="text-center mb-4">Xodimlar kirish</h4>
                <form method="POST" action="<?php echo e(route('loginemployee-to-database'), false); ?>">
                    <?php echo csrf_field(); ?>
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form5Example1" class="form-control" name="employee_id_number"
                            placeholder="Xodim ID" />
                        <label class="form-label" for="form5Example1">Login</label>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form5Example2" class="form-control" name="password"
                            placeholder="Parol" />
                        <label class="form-label" for="form5Example2">Parol</label>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary w-100  mb-4">Tizimga kirish</button>
                    <a href="<?php echo e(route('hemis.web.employee'), false); ?>" class="btn btn-success d-grid w-100">HEMIS orqali kirish</a>
                </form>
            </div>

            <div class="col-4 card  m-2 p-4">
                <h4 class="text-center mb-4">Talabalar kirish</h4>
                <form method="POST" action="<?php echo e(route('loginstudent-to-database'), false); ?>">
                    <?php echo csrf_field(); ?>
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form5Example1" class="form-control" name="student_id_number"
                            placeholder="Student ID" />
                        <label class="form-label" for="form5Example1">Login</label>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form5Example2" class="form-control" name="password"
                            placeholder="Parol" />
                        <label class="form-label" for="form5Example2">Parol</label>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary w-100  mb-4">Tizimga kirish</button>
                    <a href="<?php echo e(route('hemis.web.student'), false); ?>" class="btn btn-success d-grid w-100">HEMIS orqali kirish</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newsingle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/frontend/login.blade.php ENDPATH**/ ?>