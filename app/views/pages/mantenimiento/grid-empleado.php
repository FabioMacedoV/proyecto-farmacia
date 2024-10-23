<?php session_start(); ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-dashboard.php' ?>

<main>
    <div class="container title-workers">
        <h2>Bienvenido al listado de Empleados</h2>
        <a href="<?= URL . "/mantenimiento/registro_empleado" ?>" class="boton"><button><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button></a>
    </div>
    <div class="container table-workers">
        <div class="nav-table">
            <h3>Consultar empleado: </h3>
            <input class="input-buscador" type="text" placeholder="Buscar..." name="txtBuscador" id="txtBuscador">
            <div class="contenedor-prueba">
                <a class="boton-buscar"><button onclick="buscarEmpleado()"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></a>
                <a class="boton-limpiar"><button onclick="limpiarBusqueda()"><i class="fa fa-times" aria-hidden="true"></i> Limpiar</button></a>
            </div>
        </div>

        <div class="cont-table">
            <table class="table">
                <thead>
                    <tr style="text-align: center;">
                        <th scope="col" style="width: 5%;">ID</th>
                        <th scope="col" style="width: 25%;">Empleado</th>
                        <th scope="col" style="width: 15%;">Cargo</th>
                        <th scope="col" style="width: 30%;">Horario</th>
                        <th scope="col" style="width: 25%;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($datos['grid'])) : ?>
                        <?php foreach ($datos['grid'] as $row): ?>
                            <tr style="text-align: center;">
                                <td><?php echo $row['empleado_id']; ?></td>
                                <td><?php echo $row['empleado']; ?></td>
                                <td><?php echo $row['cargo']; ?></td>
                                <td><?php echo $row['horario']; ?></td>
                                <td>
                                    <a href="<?= URL . "/mantenimiento/visualizar_empleado/" . $row['empleado_id'] ?>" class="boton-visualizar"><button><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                    <a href="<?= URL . "/mantenimiento/editar_empleado/" . $row['empleado_id'] ?>" class="boton-editar"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                    <a class="boton-eliminar"><button onclick="confirmacionEliminar(<?php echo $row['empleado_id'] ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
</main>

</div>

<?php require_once APP . '/views/inc/footer.php' ?>