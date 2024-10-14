<div id="loader">
    <div></div>
</div>

<div class="encabezado-nosotros">
    <div class="scale-up-center">
        <h1 class>IBCorpCapital</h1>
        <p>IBCorpCapital gestiona capitales de pequeños, medianos y grandes inversionistas que busca incrementar su
        patrimonio a través de nuestras inversiones en desarrollo inmobiliario.</p>
    </div>
</div>

<section class="projects">
    <h2 class="animated-title hidden">Nuestros proyectos</h2>
    <p>Algunas obras hechas por nosotros en diferentes distritos de Lima</p>

    <section class="projects_casas">
        <?php $__currentLoopData = $propiedades->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propiedad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="div_casa_general">
                <div class="div_casa_img">
                    <img loading="lazy" src="<?php echo e(asset('images/Home/imagen_miraflores.jpg')); ?>" alt="Imagen del Proyecto en Miraflores">
                </div>

                <div class="div_casa_texto">
                    <h4><?php echo e($propiedad->titulo); ?></h4>
                    <p>Departamento: <?php echo e($propiedad->nombre_departamento); ?></p>
                    <p>Provincia: <?php echo e($propiedad->nombre_provincia); ?></p>
                    <p>Distrito: <?php echo e($propiedad->nombre_distrito); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>

<section class="icons">
    <h2 class="animated-title hidden">Trabajamos de la mano con:</h2>
    <div class="div_icons">
        <div>
            <img loading="lazy" src="<?php echo e(asset('images/Home/icon1.webp')); ?>" alt="Aprendizaje">
            <p>APRENDIZAJE</p>
        </div>

        <div>
            <img loading="lazy" src="<?php echo e(asset('images/Home/icon2.webp')); ?>" alt="Networking">
            <p>NETWORKING</p>
        </div>

        <div>
            <img loading="lazy" src="<?php echo e(asset('images/Home/icon3.webp')); ?>" alt="Contrato Mutuo">
            <p>CONTRATO MUTUO</p>
        </div>

        <div>
            <img loading="lazy" src="<?php echo e(asset('images/Home/icon4.webp')); ?>" alt="ROI">
            <p>ROI</p>
        </div>
        
        <div>
            <img loading="lazy" src="<?php echo e(asset('images/Home/icon5.webp')); ?>" alt="Letra de Cambio">
            <p>LETRA DE CAMBIO</p>
        </div>

        <div>
            <img loading="lazy" src="<?php echo e(asset('images/Home/icon6.webp')); ?>" alt="Licencia de Construcción">
            <p>LICENCIA DE CONSTRUCCIÓN</p>
        </div>
    </div>
</section>

<section class="services">
    <h2 class="animated-title hidden">Nuestros servicios</h2>
    <p>Explora nuestros servicios especializados en el sector inmobiliario.</p>
    <div class="service-cards">
        <div class="service-card">
            <img loading="lazy" src="<?php echo e(asset('images/home/servicio1.jpg')); ?>" alt="Ejecución de Proyectos Inmobiliarios">
            <div class="service-text">
                <h3>Ejecución de Proyectos Inmobiliarios</h3>
                <p>Conoce de cerca cómo se ejecuta un proyecto inmobiliario con nuestras visitas presenciales y seguimiento detallado.</p>
            </div>
        </div>
        <div class="service-card">
            <img loading="lazy" src="<?php echo e(asset('images/home/servicio2.jpg')); ?>" alt="Visitas Presenciales">
            <div class="service-text">
                <h3>Construcción con bajo presupuesto</h3>
                <p>Aprende las técnicas definitivas para obtener propiedades en aportación y construir de manera económica.</p>
            </div>
        </div>
        <div class="service-card">
            <img loading="lazy" src="<?php echo e(asset('images/home/servicio3.jpg')); ?>" alt="Construcción con bajo presupuesto">
            <div class="service-text">
                <h3>Visitas Presenciales</h3>
                <p>Participa en visitas presenciales a los proyectos en ejecución y observa el progreso en tiempo real.</p>
            </div>
        </div>
        <div class="service-card">
            <img loading="lazy" src="<?php echo e(asset('images/home/servicio4.jpg')); ?>" alt="Apalancamiento Financiero">
            <div class="service-text">
                <h3>Apalancamiento Financiero</h3>
                <p>Aprende a utilizar el apalancamiento financiero para maximizar tus inversiones inmobiliarias.</p>
            </div>
        </div>
        <div class="service-card">
            <img loading="lazy" src="<?php echo e(asset('images/home/servicio5.jpg')); ?>" alt="Presupuestos y Costos Acertados">
            <div class="service-text">
                <h3>Presupuestos y Costos Acertados</h3>
                <p>Elaboramos presupuestos y costos acertados para cada proyecto, asegurando la máxima eficiencia.</p>
            </div>
        </div>
        <div class="service-card">
            <img loading="lazy" src="<?php echo e(asset('images/home/servicio6.jpg')); ?>" alt="Reporte Mensual">
            <div class="service-text">
                <h3>Reporte Mensual</h3>
                <p>Recibe un reporte mensual detallado de las ejecuciones del proyecto, manteniéndote informado en todo momento.</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-map">
    <h2 class="animated-title hidden">Ubicación</h2>
    <p>Av. Circunvalación Golf Los Incas Nro. 208, Torre 3, Oficina 602B, Santiago de Surco</p>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.372566048211!2d-77.04436148461393!3d-12.108120691203804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7d2c732dd67%3A0x238c6457c4d0b80b!2sAv.%20Circunvalaci%C3%B3n%20Golf%20Los%20Incas%2C%20Santiago%20de%20Surco%2C%20Lima%2015042!5e0!3m2!1ses!2spe!4v1692154833843!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section><?php /**PATH C:\xampp\htdocs\nombre-del-proyecto\resources\views/Home/index.blade.php ENDPATH**/ ?>