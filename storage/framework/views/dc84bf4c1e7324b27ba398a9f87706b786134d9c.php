
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/css/list.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Livres'); ?>

<?php $__env->startSection('content'); ?>
<h1 class="title">Liste des livres</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($book->id); ?></th>
                <td><a href="/book/<?php echo e($book->id); ?>"><?php echo e($book->title); ?></a></td>
                <td><?php echo e($book->author); ?></td>
                <td><?php echo e($book->genre); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stagiaire\laravel\library\resources\views/list.blade.php ENDPATH**/ ?>