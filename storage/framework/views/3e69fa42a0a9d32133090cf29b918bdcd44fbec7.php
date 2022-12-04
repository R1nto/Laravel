

<?php $__env->startSection('content'); ?>
<h1>Konversi Suhu</h1>
<form action="" method="post">
    <?php echo csrf_field(); ?>
    Konversi dari:
    <select name="before" id="">
        <option selected value="c" >Celcius</option>
        <option value="k" >Kelvin</option>
        <option value="r" >Reamur</option>
        <option value="f" >Fahrenheit</option>
    </select>
    <input type="number" name="suhu" id="">
    ke:
    <select name="after" id="">
        <option selected value="c" >Celcius</option>
        <option value="k" >Kelvin</option>
        <option value="r" >Reamur</option>
        <option value="f" >Fahrenheit</option>
    </select>
    <input type="submit" value="ok" name="kirim">
</form>  
<h2><?php echo e($suhu); ?></h2>  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>
    <a href="/">home</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/suhu.blade.php ENDPATH**/ ?>