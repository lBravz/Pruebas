<link rel="stylesheet" href="css/Propiedades/propiedades.css">

<section class="seccion_propiedades">
    <section class="seccion_filtros">
        <h1 class="animated-title hidden">Nuestras Propiedades Hechas</h1>

        <div class="filtros">
            <label>Buscar por Tipo: </label>
            <select id="buscador_tipo" name="buscador">
                <option disabled selected>Selecciona un tipo...</option>
                <option value="todos">Mostrar Todos</option>
                <option value="casa">Casa</option>
                <option value="departamento">Departamento</option>
            </select>

            <label>Buscar por Distrito: </label>
            <select id="buscador_distrito" name="distrito">
                <option disabled selected>Selecciona un distrito...</option>
                <option value="todos">Mostrar Todos</option>
                <option value="ancon">Ancón</option>
                <option value="ate">Ate</option>
                <option value="barranco">Barranco</option>
                <option value="breña">Breña</option>
                <option value="carabayllo">Carabayllo</option>
                <option value="cercado de lima">Cercado de Lima</option>
                <option value="chaclacayo">Chaclacayo</option>
                <option value="chorrillos">Chorrillos</option>
                <option value="cieneguilla">Cieneguilla</option>
                <option value="comas">Comas</option>
                <option value="el agustino">El Agustino</option>
                <option value="independencia">Independencia</option>
                <option value="jesus maria">Jesús María</option>
                <option value="la molina">La Molina</option>
                <option value="la victoria">La Victoria</option>
                <option value="lince">Lince</option>
                <option value="los olivos">Los Olivos</option>
                <option value="lurigancho">Lurigancho</option>
                <option value="lurin">Lurín</option>
                <option value="magdalena del mar">Magdalena del Mar</option>
                <option value="miraflores">Miraflores</option>
                <option value="pachacámac">Pachacámac</option>
                <option value="pucusana">Pucusana</option>
                <option value="pueblo libre">Pueblo Libre</option>
                <option value="puente piedra">Puente Piedra</option>
                <option value="punta negra">Punta Negra</option>
                <option value="punta hermosa">Punta Hermosa</option>
                <option value="rimac">Rímac</option>
                <option value="san bartolo">San Bartolo</option>
                <option value="san borja">San Borja</option>
                <option value="san isidro">San Isidro</option>
                <option value="san juan de lurigancho">San Juan de Lurigancho</option>
                <option value="san juan de miraflores">San Juan de Miraflores</option>
                <option value="san luis">San Luis</option>
                <option value="san martin de porres">San Martín de Porres</option>
                <option value="san miguel">San Miguel</option>
                <option value="santa anita">Santa Anita</option>
                <option value="santa maria del_mar">Santa María del Mar</option>
                <option value="santa rosa">Santa Rosa</option>
                <option value="santiago de surco">Santiago de Surco</option>
                <option value="surquillo">Surquillo</option>
                <option value="villa el salvador">Villa El Salvador</option>
                <option value="villa maria del triunfo">Villa María del Triunfo</option>
            </select>
        </div>
    </section>

    <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propiedad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="seccion_propiedad" data-tipo="<?php echo e(strtolower($propiedad->tipo)); ?>" data-distrito="<?php echo e(strtolower($propiedad->nombre_distrito)); ?>">
        <div class="propiedad-img">
            <img loading="lazy" src="/images/Propiedades/Departamento.webp" alt="departamento-img">
        </div>

        <div class="div_propiedad_info">
            <div class="div_titulo">
                <h2><?php echo e($propiedad->titulo); ?></h2>
            </div>

            <div class="div_descripcion">
                <p>Tipo: <?php echo e($propiedad->tipo); ?></p>
                <p>Distrito: <?php echo e($propiedad->nombre_distrito); ?></p>
                <p><?php echo e($propiedad->descripcion); ?></p>
            </div>

            <div class="section-precio">
                <div class="title-precio">
                    <p>Monto Objetivo</p>
                </div>
                <div class="cant-precio">
                    <p>$<?php echo e(number_format($propiedad->monto_objetivo, 2)); ?></p>
                </div>
            </div>

            <div class="det_btn">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPropiedad<?php echo e($propiedad->id); ?>">Más Información</button>
            </div>
        </div>
    </section>

    <!-- Modal para cada propiedad  -->
    <div class="modal fade" id="modalPropiedad<?php echo e($propiedad->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Información de la propiedad</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h2>Características</h2>
                    <p>Descripción: <?php echo e($propiedad->descripcion); ?></p>
                    <p>Área Total: <?php echo e($propiedad->area_total); ?> m²</p>
                    <p>Número de Pisos: <?php echo e($propiedad->num_baños); ?></p>
                    <p>Número de Unidades: <?php echo e($propiedad->num_dormitorios); ?></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</section>

<script src="<?php echo e(asset('js/Propiedades/propiedades.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\ibcorpcapital10-laravel - Original\resources\views/Propiedades/index.blade.php ENDPATH**/ ?>