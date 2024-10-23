<div class="container-dashboard">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="<?= URL . rutaImg . "/logo-nav.png" ?>" alt="Logo NickyFarma">
            </div>
        </div>

        <div class="sidebar">
            <a href="<?= URL . "/mantenimiento/inicio"?>">
                <i class="fas fa-home"></i> 
                <h3>Inicio</h3>
            </a>
            <a href="<?= URL . "/mantenimiento/empleado"?>">
                <i class="fas fa-chart-line"></i> 
                <h3>Empleado</h3>
            </a>
            <a href="<?= URL . "/mantenimiento/producto"?>">
                <i class="fas fa-box"></i> 
                <h3>Productos</h3>
            </a>
            <a href="<?= URL . "/mantenimiento/ventas"?>">
                <i class="fa-solid fa-money-bill"></i> 
                <h3>Ventas</h3>
            </a>
            <a href="<?= URL . "/mantenimiento/clientes"?>">
                <i class="fas fa-users"></i> 
                <h3>Clientes</h3>
            </a>
            <a href="<?= URL . "/mantenimiento/inventario"?>">
                <i class="fas fa-cogs"></i> 
                <h3>Inventario</h3>
            </a>
            <a href="<?= URL . "/reportes/inicio"?>">
                <i class="fa-solid fa-print"></i> 
                <h3>Reporte</h3>
            </a>
            <a href="<?= URL . '/farmacia/cerrar_sesion'?>">
                <i class="fas fa-sign-out-alt"></i> 
                <h3>Cerrar sesión</h3>
            </a>
        </div>
    </aside>
</div>