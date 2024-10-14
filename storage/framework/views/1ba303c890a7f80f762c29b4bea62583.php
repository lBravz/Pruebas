<!-- -->
<link rel="stylesheet" href="<?php echo e(asset('css/Acceder/acceder.css')); ?>">

<section class="seccion_acceder">
    <div class="div_acceder">
        <form id="form_login" action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2>Inicia Sesión</h2>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input id="correo" name="correo" type="email">
            </div>

            <div class="form-group">
                <label for="clave">Clave</label>
                <input id="clave" name="clave" type="password">
            </div>

            <div class="div_texto_acceder">
                <p><a id="activar_register" href="#">¿No tienes una cuenta?</a></p>
            </div>

            <div class="div_boton">
                <input type="submit" value="Login">
            </div>
        </form>
        <form id="form_register" action="<?php echo e(route('register')); ?>" method="post" style="display:none">
            <?php echo csrf_field(); ?>
            <h3>Crear cuenta</h3>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input id="usuario" name="usuario" type="text">
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input id="correo" name="correo" type="email">
            </div>

            <div class="form-group">
                <label for="clave">Clave</label>
                <input id="clave" name="clave" type="password">
            </div>

            <div class="div_texto_acceder">
                <p><a id="activar_login" href="#">¿Ya tienes una cuenta?</a></p>
            </div>

            <div class="div_terminos">
                <input type="checkbox" id="aceptar_terminos" name="aceptar_terminos" required>
                <label for="aceptar_terminos">
                    Acepto los <strong>términos y condiciones</strong>.
                </label>
            </div>

            <div class="div_boton">
                <input type="submit" value="Registrarse">
            </div>
        </form>
    </div>
</section>

<script src="<?php echo e(asset('js/Acceder/acceder.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\IBCorpCapital-Laravel-10\resources\views/Acceder/index.blade.php ENDPATH**/ ?>