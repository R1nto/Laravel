<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retoran Rinto</title>
    <link rel="stylesheet" href="<?php echo e(asset("bootstrap/css/bootstrap.min.css")); ?>">
<style>
    a{
        text-decoration: none;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="mt-3">
            <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;" >
                <div class="container-fluid">
                    <a href="http://127.0.0.1:8000/?page=1"><img style="width: 200px;" src="<?php echo e(asset('images/logo boy.png')); ?>" alt=""></a>
                    <ul class="navbar-nav gap-5">
                        <li class="navbar-item">Cart</li>
                        <li class="navbar-item"><a href="<?php echo e(url('register')); ?>">Register</a></li>
                        <li class="navbar-item">Email</li>
                        <li class="navbar-item">Login</li>
                        <li class="navbar-item">Logout</li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <ul class="list-group">
                    <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item"><a href="<?php echo e(url('show/'.$kategori->idkategori)); ?>"><?php echo e($kategori -> kategori); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="col-10">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <div>
            footer
        </div>
    </div>

    <script src="<?php echo e(asset("bootstrap/js/bootstrap.min.js")); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\resto-app\resources\views/front.blade.php ENDPATH**/ ?>