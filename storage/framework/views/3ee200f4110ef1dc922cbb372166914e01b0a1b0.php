

<?php $__env->startSection('content'); ?>
<div class="row">
    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card text-center mx-2 mb-3" style="width: 300px">
        <img  src="<?php echo e(asset('images/'.$menu->gambar)); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($menu->menu); ?></h5>
          <p class="card-text"><?php echo e($menu->deskripsi); ?></p>
          <h5 class="card-title"><?php echo e($menu->harga); ?></h5>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-center mt-4">
      <?php echo e($menus->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resto-app\resources\views/menu.blade.php ENDPATH**/ ?>