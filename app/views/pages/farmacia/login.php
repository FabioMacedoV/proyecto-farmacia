<?php require_once APP . '/views/inc/header.php' ?>

<header class="header">
    <div class="logo">
        <img src="<?= URL . rutaImg . "/logo-nav.png" ?>" alt="Logo NickyFarma">
    </div>
</header>

<div class="login-container">
    <div class="row">
        <div class="col">

            <div class="row">
                <div class="login-text">
                    <h2>Login NickyMedic</h2>
                </div>
            </div>

            <div class="row">
                <div class="login-image">
                    <img src="<?= URL . rutaImg . "/login-img.png" ?>" alt="Logo NickyFarma" class="image-placeholder">
                </div>
            </div>
            
        </div>

        <div class="col">
            <div class="row">
                <div class="login-b">
                    <div class="circle">
                        <form method="post" action="<?= URL . "/farmacia/iniciar_sesion" ?>" class="form-login">
                            <h2>Accede a NickyMedic</h2>
                            <div class="mb-3">
                                <label class="label" for="username">Usuario:</label>
                                <input class="form-control" type="text" name="txtusuario" id="txtusuario" required>
                            </div>
                            <div class="mb-3">
                                <label class="label" for="password">Contraseña:</label>
                                <input class="form-control" type="password" name="txtcontrasenia" id="txtcontrasenia" required>
                            </div>
                            <?php if (isset($datos['mensaje'])) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error:</strong> Las credenciales no son correctas, por favor, intente nuevamente
                            </div>
                            <?php endif; ?>
                            <a href="<?= URL . "/mantenimiento/inicio" ?>" class="boton"><button><i class="fa-solid fa-door-open"></i> Ingresar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APP . '/views/inc/footer.php' ?>