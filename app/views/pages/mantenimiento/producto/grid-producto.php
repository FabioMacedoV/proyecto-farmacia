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
                <h2>Bienvenido al listado de Productos</h2>
                <a href="<?= URL . "/mantenimiento/registro_producto" ?>" class="boton"><button><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button></a>
            </div>
            <div class="container table-workers">
                <div class="nav-table">
                    <h3>Consultar producto: </h3>
                    <input class="input-buscador" type="search" placeholder="Buscar..." name="txtBuscador" id="txtBuscador">
                    <div class="contenedor-prueba">
                        <a class="boton-buscar"><button onclick="buscarProducto()"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></a>
                        <a class="boton-limpiar"><button onclick="limpiarBusqueda()"><i class="fa-solid fa-eraser"></i> Limpiar</button></a>
                    </div>
                </div>

                <div class="cont-table table-wrapper">
                    <table class="table">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col" style="width: 5%;">ID</th>
                                <th scope="col" style="width: 20%;">Nombre</th>
                                <th scope="col" style="width: 15%;">Precio</th>
                                <th scope="col" style="width: 10%;">Stock</th>
                                <th scope="col" style="width: 15%;">Marca</th>
                                <th scope="col" style="width: 15%;">Categoria</th>
                                <th scope="col" style="width: 20%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($datos['grid'])) : ?>
                                <?php foreach ($datos['grid'] as $row): ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo "s/" . $row['precio']; ?></td>
                                        <td><?php echo $row['stock']; ?></td>
                                        <td><?php echo $row['marca']; ?></td>
                                        <td><?php echo $row['categoria']; ?></td>
                                        <td>
                                            <a href="<?= URL . "/mantenimiento/visualizar_producto/" . $row['id'] ?>" class="boton-visualizar"><button><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="<?= URL . "/mantenimiento/editar_producto/" . $row['id'] ?>" class="boton-editar"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                            <a class="boton-eliminar"><button onclick="confirmacionEliminar(<?php echo $row['id'] ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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