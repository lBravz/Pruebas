<link rel="stylesheet" href="css/Proyectos/proyectos.css">

<section class="contenedor_proyectos">
    <h1 class="animated-title hidden">Nuestros Próximos Proyectos</h1>

    <section class="seccion_filtros">
        <div class="filtros">
            <label>Buscar estado: </label>
            <select id="buscador_estado" name="buscador">
                <option disabled selected>Buscar el estado...</option>
                <option value="todos">Mostrar Todos</option>
                <option value="en desarrollo">En Desarrollo</option>
                <option value="completado">Completado</option>
                <option value="en pausa">En Pausa</option>
            </select>
        </div>
    </section>

    <div class="seccion_proyectos">
        <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="seccion_proyecto" data-estado="<?php echo e(strtolower($proyecto->estado)); ?>">
            <div class="propiedad-img">
                <span class="estado-label estado-<?php echo e(strtolower($proyecto->estado)); ?>">
                    <?php echo e(ucfirst($proyecto->estado)); ?>

                </span>
                <img loading="lazy" src="/images/Propiedades/Departamento.webp" alt="departamento-img">
            </div>

            <div class="div_proyecto_info">
                <div class="div_titulo">
                    <h2><?php echo e($proyecto->titulo_estado); ?></h2>
                </div>

                <div class="div_descripcion">
                    <p><?php echo e($proyecto->descripcion); ?></p>
                    <p class="estado">Estado: <?php echo e($proyecto->estado); ?></p>
                </div>

                <div class="det_btn">
                    <button>Más Información</button>
                </div>
            </div>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<script src="<?php echo e(asset('js/Proyectos/proyectos.js')); ?>"></script>
<?php /**PATH C:\xampp\htdocs\IBCorpCapital-Laravel-10\resources\views/Proyectos/index.blade.php ENDPATH**/ ?>