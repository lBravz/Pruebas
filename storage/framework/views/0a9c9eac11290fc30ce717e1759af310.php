

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/Admin/Edit/edit.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="seccion_editar">
    <h1>Editar Asesor</h1>

    <form action="<?php echo e(route('Admin.asesores.update', $asesor->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="nombre_asesor">Nombre Asesor:</label>
            <input type="text" id="nombre_asesor" name="nombre_asesor" value="<?php echo e($asesor->nombre_asesor); ?>" required>
        </div>

        <div>
            <label for="correo_asesor">Correo Asesor:</label>
            <input type="text" id="correo_asesor" name="correo_asesor" value="<?php echo e($asesor->correo_asesor); ?>" required>
        </div>

        <button type="submit">Actualizar Asesor</button>
    </form>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\IBCorpCapital-Laravel-10 - copia\resources\views/Admin/Asesores/edit.blade.php ENDPATH**/ ?>