<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12 margin-tb">
            <div style="text-align: center;">
                <h3>My tasks</h3>
            </div>
            <div style="margin: 40px;">
                <a class="btn btn-success" href="<?php echo e(route('tasks.create')); ?>">Add a new task</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table">
        <tr>
            <th>ID</th>
            <th>Task name</th>
            <th>Task status</th>
            <th width="250px">Actions</th>
        </tr>
       
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($task->id); ?></td>
                <td><?php echo e($task->name); ?></td>
                <td><?php echo e($task->status); ?></td>
                <td>
                    <form action="<?php echo e(route('tasks.destroy',$task->id)); ?>" method="POST">

                        <a class="btn btn-info" href="<?php echo e(route('tasks.show',$task->id)); ?>">Show</a>

                        <a class="btn btn-primary" href="<?php echo e(route('tasks.edit',$task->id)); ?>">Edit</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\right-click-media\resources\views/tasks/index.blade.php ENDPATH**/ ?>