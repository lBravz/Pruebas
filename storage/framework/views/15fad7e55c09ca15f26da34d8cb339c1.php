<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/Admin/Proyectos/index.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<section class="seccion_listado_proyectos">
    <div class="div_encabezado">
        <h1>Listado de Proyectos</h1>
        <button class="btn_crear"><a href="<?php echo e(route('Admin.proyectos.create')); ?>">Crear Proyecto</a></button>

        <?php if(session('success')): ?>
            <div class="div_mensaje">
                <p><?php echo e(session('success')); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($proyecto->titulo_estado); ?></td>
                    <td><?php echo e($proyecto->descripcion); ?></td>
                    <td><?php echo e($proyecto->nombre_estado); ?></td>
                    <td>
                        <button class="btn_editar"><a href="<?php echo e(route('Admin.proyectos.edit', $proyecto->id)); ?>">Editar</a></button>
                        <form action="<?php echo e(route('Admin.proyectos.destroy', $proyecto->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn_eliminar" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nombre-del-proyecto\resources\views/Admin/Proyectos/index.blade.php ENDPATH**/ ?>