

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/Admin/Create/create.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="seccion_crear">
    <h1>Crear Asesor</h1>

    <form action="<?php echo e(route('Admin.asesores.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div>
            <label for="nombre_asesor">Nombre:</label>
            <input type="text" id="nombre_asesor" name="nombre_asesor" required>
        </div>

        <div>
            <label for="correo_asesor">Correo:</label>
            <input type="text" id="correo_asesor" name="correo_asesor" required>
        </div>

        <button type="submit">Crear Asesor</button>
    </form>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\IBCorpCapital-Laravel-10\resources\views/Admin/Asesores/create.blade.php ENDPATH**/ ?>