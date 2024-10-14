<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('css/Admin/inicio.css')); ?>">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> 
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <header>
        <h1>Bienvenido al Panel Administrativo</h1>
        <div class="boton-regresar">
            <a href="<?php echo e(url('/')); ?>" class="btn">Regresar al Home</a>
        </div>
    </header>

    <div class="container_general">
        <nav>
            <h1><a href="<?php echo e(route('Admin.inicio')); ?>">Inicio</a></h1>
            <ul>
                <li><a href="<?php echo e(route('Admin.proyectos')); ?>">Proyectos</a></li>
                <li><a href="<?php echo e(route('Admin.propiedades')); ?>">Propiedades</a></li>
                <li><a href="<?php echo e(route('Admin.asesores')); ?>">Asesores</a></li>
            </ul>
        </nav>

        <main>
            <?php if(Route::currentRouteName() == 'Admin.inicio'): ?>
                <div class="accesos_directos">
                    <button onclick="window.location.href='<?php echo e(route('Admin.proyectos.create')); ?>'">Agregar Proyecto</button>
                    <button onclick="window.location.href='<?php echo e(route('Admin.propiedades.create')); ?>'">Agregar Propiedad</button>
                    <button onclick="window.location.href='<?php echo e(route('Admin.asesores.create')); ?>'">Agregar Asesor</button>
                </div>

                <section class="seccion_bloques">
                    <div>
                        <h3>Proyectos: <br>
                        <?php echo e($total_proyectos); ?></h3> 
                    </div>

                    <div>
                        <h3>Propiedades: <br>
                        <?php echo e($total_propiedades); ?></h3> 
                    </div>

                    <div>
                        <h3>Asesores: <br>
                        <?php echo e($total_asesores); ?></h3> 
                    </div>
                </section>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/Admin/inicio.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\ibcorpcapital10-laravel - Original\resources\views/Admin/inicio.blade.php ENDPATH**/ ?>