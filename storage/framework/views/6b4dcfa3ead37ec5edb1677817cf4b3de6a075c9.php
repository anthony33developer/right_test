<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-6 text-center m-auto">
            <div>
                <h3>Add a new task</h3>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            Invalid input, please try again.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('tasks.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 m-auto" >
                <div class="form-group">
                    Task name:<input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    Task status:<input type="text" name="status" class="form-control">
                    <select name="status" size="3">
                        <option value="Completed">Complete</option>
                        <option value="Incomplete">In progress</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-auto">
                <button type="submit" class="btn btn-success">Create task</button>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\right-click-media\resources\views/tasks/create.blade.php ENDPATH**/ ?>