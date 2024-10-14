<link rel="stylesheet" href="<?php echo e(asset('css/Asesores/asesores.css')); ?>">

<section class="seccion_general">
    <h1 class="animated-title hidden">Nuestros Asesores</h1>

    <section class="seccion_asesores">  
        <?php $__currentLoopData = $asesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="asesor">
            <div class="info_img">
                <img loading="lazy" src="<?php echo e(asset('images/Asesores/asesor.png')); ?>" alt="Logo">
                <h2><?php echo e($asesor->nombre_asesor); ?></h2>
            </div>

            <div class="info_texto">
                <i class="fa-solid fa-envelope"></i>
                <a><?php echo e($asesor->correo_asesor); ?></a>
            </div>

            <div class="info_redes">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-solid fa-phone"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

</section>
<?php /**PATH C:\xampp\htdocs\ibcorpcapital10-laravel - Original\resources\views/Asesores/index.blade.php ENDPATH**/ ?>