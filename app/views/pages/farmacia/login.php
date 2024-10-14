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
                        <form class="form-login">
                            <h2>Accede a NickyMedic</h2>
                            <div class="mb-3">
                                <label class="label" for="username">Usuario:</label>
                                <input class="form-control" type="text" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="label" for="password">Contraseña:</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            <a href="<?= URL . "/mantenimiento/inicio" ?>" class="boton"><button><i class="fa-solid fa-door-open"></i> Ingresar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APP . '/views/inc/footer.php' ?>