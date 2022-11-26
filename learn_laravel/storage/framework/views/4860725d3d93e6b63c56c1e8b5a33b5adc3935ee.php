<form action="<?php echo e(route('baiviet.store')); ?>" method="post">
  <?php echo csrf_field(); ?>
  <div>
    <label for="title">Tiêu đề:</label>
    <br>
    <input type="text" name="title">
  </div>
  <div>
    <?php $__errorArgs = ["title"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="invalid-feedback" role="alert">
      <strong><?php echo e($message); ?></strong>
    </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div>
    <label for="content">Nội dung:</label>
    <br>
    <textarea cols="25" rows="8" name="content"></textarea>
  </div>
  <div>
    <?php $__errorArgs = ["content"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="invalid-feedback" role="alert">
      <strong><?php echo e($message); ?></strong>
    </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div>
    <button type="submit">Đăng bài</button>
  </div>
</form><?php /**PATH D:\Coder\PHP\Lap_trinh_vien_TV\learn_laravel\resources\views/article/create.blade.php ENDPATH**/ ?>