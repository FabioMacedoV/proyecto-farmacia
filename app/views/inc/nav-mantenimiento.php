<header class="header">
    <div class="logo">
        <img src="<?= URL . rutaImg . "/logo-nav.png" ?>" alt="Logo NickyFarma">
    </div>

    <nav>
        <ul class="nav-links">
            <li><a href="<?= URL . "/mantenimiento/inicio" ?>">Inicio</a></li>
            <li><a href="<?= URL . "/mantenimiento/ventas" ?>">Ventas</a></li>
            <li><a href="<?= URL . "/mantenimiento/empleado" ?>">Empleado</a></li>
            <li><a href="<?= URL . "/mantenimiento/clientes" ?>">Clientes</a></li>
            <li><a href="<?= URL . "/mantenimiento/producto" ?>">Productos</a></li>
            <li><a href="<?= URL . "/mantenimiento/inventario" ?>">Inventario</a></li>
        </ul>
    </nav>

    <div>
        <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['Usuario'] ?>
    </div>
</header>