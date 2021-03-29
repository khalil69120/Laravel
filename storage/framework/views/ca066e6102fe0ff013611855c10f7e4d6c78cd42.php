
<?php $__env->startSection('title', 'Livre'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/css/book.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="title">Détail du livre</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><?php echo e($book->title); ?></div>
            <div class="card-body text-dark flex">
                <p>Auteur :</p>
                <p class="card-text"><?php echo e($book->author); ?></p>
            </div>
            <div class="card-body text-dark flex">
                <p>Genre :</p>
                <p class="card-text"><?php echo e($book->genre); ?></p>
            </div>
            <div class="card-body text-dark flex">
                <p>Année de publication :</p>
                <p class="card-text"><?php echo e($book->publication_year); ?></p>
            </div>
            <div class="card-body text-dark">
                <p>Résumé :</p>
                <p class="card-text"><?php echo e($book->synopsis); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stagiaire\laravel\library\resources\views/book.blade.php ENDPATH**/ ?>