

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('zodiak')); ?>" method="post">
    <?php echo csrf_field(); ?>
    Bulan:
    <input type="text" name="bulan" id="">
    Tanggal:
    <input type="text" name="tanggal" id="">
    <input type="submit" value="kirim" name="kirim">
</form>    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <a href="/">home</a>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('tugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/zodiak.blade.php ENDPATH**/ ?>