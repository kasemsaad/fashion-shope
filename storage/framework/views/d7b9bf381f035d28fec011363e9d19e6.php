<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <h1 class="mt-5">Sticky footer with fixed navbar</h1>
        <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A
            fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main
                &gt; .container</code>.</p>
        <p>Back to <a href="https://getbootstrap.com/docs/5.3/examples/sticky-footer/">the default sticky footer</a> minus
            the navbar.</p>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title', 'Admin Area | Users'); ?>
<?php $users = index::with('category')->orderBy('id', 'DESC')->paginate(10)?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div>
            <a class="float-end btn btn-primary" href="<?php echo e(route('admin.users.create')); ?>">Add User</a>
            <h1 class="mt-3">Users</h1>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('admin.users.show', $user['id'])); ?>">
                                Show
                            </a> |
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('admin.users.edit', $user['id'])); ?>">
                                Edit
                            </a> |
                            <form class="d-inline" action="<?php echo e(route('admin.users.destroy', $user['id'])); ?>" method="post">
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

        <?php echo $users->links('pagination::bootstrap-5'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fashion-shop\resources\views/admin/index.blade.php ENDPATH**/ ?>