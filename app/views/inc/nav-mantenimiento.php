<header class="header">
    <div class="logo">
        <img src="<?= URL . rutaImg . "/logo-nav.png" ?>" alt="Logo NickyFarma">
    </div>

    <nav>
        <ul class="nav-links">
            <li><a href="<?= URL . "/mantenimiento/inicio" ?>">Inicio</a></li>

            <?php if ($_SESSION['Tipousuario'] == 1): ?> <!--* Administrador *-->
            <li><a href="<?= URL . "/mantenimiento/empleado" ?>">Empleados</a></li>
            <li><a href="<?= URL . "/mantenimiento/producto" ?>">Productos</a></li>
            <?php endif; ?>

            <?php if ($_SESSION['Tipousuario'] == 2): ?> <!--* Vendedor *-->
            <li><a href="<?= URL . "/mantenimiento/ventas" ?>">Ventas</a></li>
            <li><a href="<?= URL . "/mantenimiento/clientes" ?>">Clientes</a></li>
            <?php endif; ?>

            <?php if ($_SESSION['Tipousuario'] == 3): ?> <!--* Almacen *-->
            <li><a href="<?= URL . "/mantenimiento/inventario" ?>">Inventario</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div>
    <li class="nav-item dropdown" style="list-style-type: none;">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['Usuario'] ?>
        </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
            </ul>
        </li>
        
    </div>
</header>