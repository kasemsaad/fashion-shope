<?php $__env->startSection('title', 'Admin Area | Books'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div>
            <a class="float-end btn btn-primary" href="<?php echo e(route('admin.books.create')); ?>">Add Book</a>
            <h1 class="mt-3">Books</h1>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Title</td>
                    <td>Category</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($book['id']); ?></td>
                        <td><?php echo e($book['title']); ?></td>
                        <td><?php echo e($book['category']['name']); ?></td>
                        <td><img class="img-thumbnail" src="<?php echo e(\Storage::url($book['image'])); ?>" srcset="" alt=""
                                width="200"></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('admin.books.show', $book['id'])); ?>">
                                Show
                            </a> |
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('admin.books.edit', $book['id'])); ?>">
                                Edit
                            </a> |
                            <form class="d-inline" action="<?php echo e(route('admin.books.destroy', $book['id'])); ?>" method="post">
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

        <?php echo $books->links('pagination::bootstrap-5'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fashion-shop\resources\views/admin/page/index.blade.php ENDPATH**/ ?>