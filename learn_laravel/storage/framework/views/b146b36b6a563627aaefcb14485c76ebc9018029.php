

<?php $__env->startSection("content"); ?>
<h1>Danh sách bài viết</h1>

<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
  <?php echo e($article->title); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div>
  <?php echo e($articles->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Coder\PHP\Lap_trinh_vien_TV\learn_laravel\resources\views/article/list.blade.php ENDPATH**/ ?>