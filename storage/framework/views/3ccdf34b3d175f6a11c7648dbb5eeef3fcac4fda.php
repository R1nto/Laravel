

<?php $__env->startSection('content'); ?>
<h1>Kalkulator</h1>
<form action="<?php echo e(url('kalkulator')); ?>" method="post">
    <?php echo csrf_field(); ?>
    angka 1:
    <input type="number" name="angka1" id="">
    angka 2:
    <input type="number" name="angka2" id="">
    <input type="submit" value="X" name="kali">
    <input type="submit" value=":" name="bagi">
    <input type="submit" value="+" name="tambah">
    <input type="submit" value="-" name="kurang">
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <a href="/">home</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/kalkulator.blade.php ENDPATH**/ ?>