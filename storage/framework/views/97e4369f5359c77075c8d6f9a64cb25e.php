<?php
use App\Models\Book;
    // $projects =  DB::with('category')->orderBy('id', 'DESC')->paginate(10);
    $projects = DB::table('books')->get();
$books = json_decode($projects, true);
?>
<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div class="m">
                                <img class="img-thumbnail" src="<?php echo e(\Storage::url($book['image'])); ?>" srcset="" alt=""width="100">
                                <?php echo e($book['id']); ?>

                               <?php echo e($book['title']); ?>

<a class="btn display-3"href="https://www.youtube.com/watch?v=dy-JJjdLct0">Shop Now</a>





</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<style>
    .row{
        width: auto;
        height: 10rem;
        background-color: rgb(17, 14, 14);
        display: flex;
        display: inline
    }
    .m{
        width: 10rem;
        height: 10rem;
        background-color: red;
    position: relative;
    }


    </style>
<?php /**PATH C:\xampp\htdocs\fashion-shop\resources\views/front/pages/homedata.blade.php ENDPATH**/ ?>