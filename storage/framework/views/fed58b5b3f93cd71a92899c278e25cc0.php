<?php $__env->startSection('title', 'Admin Area | Hashtags'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div>
            <a class="float-end btn btn-primary" href="<?php echo e(route('admin.hashtags.create')); ?>">Add Hashtag</a>
            <h1 class="mt-3">Hashtags</h1>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $hashtags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hashtag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($hashtag['id']); ?></td>
                        <td><?php echo e($hashtag['name']); ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('admin.hashtags.show', $hashtag['id'])); ?>">
                                Show
                            </a> |
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('admin.hashtags.edit', $hashtag['id'])); ?>">
                                Edit
                            </a> |
                            <form class="d-inline" action="<?php echo e(route('admin.hashtags.destroy', $hashtag['id'])); ?>"
                                method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

        <?php echo $hashtags->links('pagination::bootstrap-5'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\books-85\resources\views/admin/hashtags/index.blade.php ENDPATH**/ ?>