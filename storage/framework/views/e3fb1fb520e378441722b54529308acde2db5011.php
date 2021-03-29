
<?php $__env->startSection('title', 'Ajout'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/css/add.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="title">Ajouter un livre</h1>
    <div>
        <form action="/addBook" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-4 col-form-label">Auteur</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="author" placeholder="Auteur">
                </div>
            </div>
            <div class="form-group row">
                <label for="synopsis" class="col-sm-4 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="synopsis" placeholder="Résumé">
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-4 col-form-label">Année de publication</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="publication_year" placeholder="Année de publication">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-4 col-form-label">Genre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="genre" placeholder="Genre">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter !</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stagiaire\laravel\library\resources\views/addBook.blade.php ENDPATH**/ ?>