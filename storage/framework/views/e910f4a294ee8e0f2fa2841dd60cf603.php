<?php $__env->startSection('title', 'Admin Area | Categories'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div>
            <a class="float-end btn btn-primary" href="<?php echo e(route('admin.categories.create')); ?>">Add Category</a>
            <h1 class="mt-3">Categories</h1>
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

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($category['id']); ?></td>
                        <td><?php echo e($category['name']); ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('admin.categories.show', $category['id'])); ?>">
                                Show
                            </a> |
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('admin.categories.edit', $category['id'])); ?>">
                                Edit
                            </a> |
                            <form class="d-inline" action="<?php echo e(route('admin.categories.destroy', $category['id'])); ?>"
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

        <?php echo $categories->links('pagination::bootstrap-5'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\books-85\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>