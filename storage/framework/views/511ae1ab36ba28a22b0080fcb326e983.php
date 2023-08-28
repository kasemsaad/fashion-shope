<?php $__env->startSection('title', 'Admin Area | Show Book'); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-content card">
        <div class="row g-3 card-body">
            <div class="card-title">
                <a class="float-end btn btn-primary mt-3" href="<?php echo e(route('admin.books.index')); ?>">Back</a>
                <h1 class="mt-3">Show Book</h1>
            </div>
            <div class="col-12">
                <label class="form-label" for="inputTitle">Title</label>
                <input class="form-control" id="inputTitle" name="title" type="text" value="<?php echo e($book->title); ?>"
                    disabled>
            </div>
            <div class="col-12">
                <label class="form-label" for="inputDescription">Description</label>
                <textarea class="form-control" id="inputDescription" name="description" disabled><?php echo e($book->description); ?></textarea>
            </div>
            <div class="col-12">
                <label class="form-label d-block" for="inputImage">Image</label>
                <img class="img-thumbnail" src="<?php echo e(\Storage::url($book->image)); ?>" alt="" srcset="" width="50%">
            </div>
            <div class="col-12">
                <label class="form-label" for="inputCategory">Category</label>
                <p><?php echo e($book->category->name); ?></p>
            </div>
            <div class="col-12">
                <label class="form-label" for="inputHashtags">Hashtags</label>
                <?php $__currentLoopData = $book->hashtags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hashtag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="d-inline btn btn-bd-primary"><?php echo e($hashtag->name); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fashion-shop\resources\views/admin/books/show.blade.php ENDPATH**/ ?>