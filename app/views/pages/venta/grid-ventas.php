<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php require_once APP . '/views/inc/header.php' ?>

<div class="row">
    <div class="col-2">
        <?php require_once APP . '/views/inc/nav-dashboard.php' ?>
    </div>
    <div class="col">
        <div class="row-custom">
            <?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>
        </div>
        <div class="row">
            <div class="container title-workers">
                <h2>Bienvenido al listado de Ventas</h2>
                <!-- <pre><?php print_r($datos["grid"]); ?></pre> -->
                <a href="<?= URL . "/mantenimiento/registrar_venta" ?>" class="boton"><button><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button></a>
            </div>

            <div class="container table-workers">
                <div class="nav-table">
                    <h4>Consultar empleado de venta: </h4>
                    <input class="input-buscador" type="search" placeholder="Buscar..." name="txtBuscador" id="txtBuscador">
                    <div class="contenedor-prueba">
                        <a class="boton-buscar"><button onclick="buscarVenta()"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></a>
                        <a class="boton-limpiar"><button onclick="limpiarBusqueda()"><i class="fa-solid fa-eraser"></i> Limpiar</button></a>
                    </div>
                </div>

                <div class="cont-table table-wrapper">
                    <table class="table">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col" style="width: 5%;">ID</th>
                                <th scope="col" style="width: 25%;">Fecha</th>
                                <th scope="col" style="width: 10%;">Total</th>
                                <th scope="col" style="width: 15%;">Cliente</th>
                                <th scope="col" style="width: 15%;">Trabajador</th>
                                <th scope="col" style="width: 25%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($datos['grid'])) : ?>
                                <?php foreach ($datos['grid'] as $row): ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $row['venta_id']; ?></td>
                                        <td><?php echo $row['fecha']; ?></td>
                                        <td><?php echo $row['total']; ?></td>
                                        <td><?php echo $row['cliente']; ?></td>
                                        <td><?php echo $row['empleado']; ?></td>
                                        <td>
                                            <a href="#" class="boton-visualizar"><button><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5">No se encontraron empleados.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once APP . '/views/inc/footer.php' ?>