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
            <!-- <pre><?php print_r($datos["grid"]); ?></pre> -->
            <div class="container title-workers">
                <h2>Bienvenido al listado de Clientes</h2>
                <a href="<?= URL . "/mantenimiento/registro_cliente" ?>" class="boton"><button><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button></a>
            </div>

            <div class="container table-workers">
                <div class="nav-table">
                    <h3>Consultar clientes: </h3>
                    <input class="input-buscador" type="search" placeholder="Buscar..." name="txtBuscador" id="txtBuscador">
                    <div class="contenedor-prueba">
                        <a class="boton-buscar"><button onclick="buscarCliente()"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></a>
                        <a class="boton-limpiar"><button onclick="limpiarBusqueda()"><i class="fa-solid fa-eraser"></i> Limpiar</button></a>
                    </div>
                </div>

                <div class="cont-table table-wrapper">
                    <table class="table">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col" style="width: 5%;">ID</th>
                                <th scope="col" style="width: 25%;">Cliente</th>
                                <th scope="col" style="width: 15%;">DNI</th>
                                <th scope="col" style="width: 15%;">Celular</th>
                                <th scope="col" style="width: 15%;">Correo</th>
                                <th scope="col" style="width: 25%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($datos['grid'])) : ?>
                                <?php foreach ($datos['grid'] as $row): ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $row['cliente_id']; ?></td>
                                        <td><?php echo $row['cliente']; ?></td>
                                        <td><?php echo $row['dni']; ?></td>
                                        <td><?php echo $row['celular']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td>
                                            <a href="<?= URL . "/mantenimiento/visualizar_cliente/" . $row['cliente_id'] ?>" class="boton-visualizar"><button><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="<?= URL . "/mantenimiento/editar_cliente/" . $row['cliente_id'] ?>" class="boton-editar"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                            <a class="boton-eliminar"><button onclick="confirmacionEliminar(<?php echo $row['cliente_id'] ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6">No se encontraron clientes.</td>
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