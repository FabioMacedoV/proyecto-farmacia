<?php require_once APP . '/views/inc/header.php' ?>

<header class="header">
    <div class="logo">
        <img src="<?= URL . rutaImg . "/logo-farmacia.jpg" ?>" alt="Logo NickyFarma">
    </div>
</header>

<div class="login-container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="login-text">
                    <h2>Somos NickyMedic</h2>
                    <p>“Más salud al menor precio”</p>
                </div>
            </div>

            <div class="row">
                <div class="login-image">
                    <img src="<?= URL . rutaImg . "/imagen-categoria.jpg" ?>" alt="Logo NickyFarma" class="image-placeholder">
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
                            <button type="submit">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APP . '/views/inc/footer.php' ?>