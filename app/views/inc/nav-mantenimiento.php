<header class="header">
    <div class="logo">
    <?php if (isset($datos['tipoRegistro'])) : ?>
        <img src="<?= URL . rutaImg . "/logo-nav.png" ?>" alt="Logo NickyFarma">
    <?php endif; ?>
    </div>
    <div class="nUsuario">
        <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['Usuario'] ?>
    </div>
</header>