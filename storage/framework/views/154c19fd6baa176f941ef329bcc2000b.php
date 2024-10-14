<link rel="stylesheet" href="<?php echo e(asset('css/partials/header.css')); ?>">

<body>
    <header>
        <!-- Navbar para pantallas grandes -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top d-none d-lg-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="https://cdn.discordapp.com/attachments/855598528792625152/1039641224392474715/logoibcorp.png" alt="IBCorpCapital" style="height: 40px;">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('nosotros')); ?>">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('proyectos')); ?>">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('propiedades')); ?>">Propiedades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('asesores')); ?>">Asesores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('contactanos')); ?>">Contáctanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('acceder')); ?>">Acceder</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Offcanvas para pantallas pequeñas -->
        <nav class="navbar navbar-dark bg-dark fixed-top d-lg-none">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="https://cdn.discordapp.com/attachments/855598528792625152/1039641224392474715/logoibcorp.png" alt="IBCorpCapital" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Opciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('proyectos')); ?>">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('nosotros')); ?>">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('propiedades')); ?>">Propiedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('asesores')); ?>">Asesores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('contactanos')); ?>">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('acceder')); ?>">Acceder</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</body><?php /**PATH C:\xampp\htdocs\nombre-del-proyecto\resources\views/partials/header.blade.php ENDPATH**/ ?>