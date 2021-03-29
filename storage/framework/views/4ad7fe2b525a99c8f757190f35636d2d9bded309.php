
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/css/home.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset('/img/library.png')); ?>" alt="">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stagiaire\laravel\library\resources\views/home.blade.php ENDPATH**/ ?>