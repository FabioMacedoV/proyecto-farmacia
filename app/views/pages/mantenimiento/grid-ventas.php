<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<div class="container title-workers">
    <h2>Bienvenido al listado de Ventas</h2> 
    <a href="<?= URL . "/mantenimiento/orden_venta" ?>" class="boton"><button><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button></a>
</div>

<div class="container table-workers">
    <div class="nav-table">
        <h3>Consultar ventas: </h3>
        <input class="input-buscador" type="search" placeholder="Buscar..." aria-label="Buscar">
        <div class="contenedor-prueba">
            <a href="#" class="boton-buscar"><button><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></a>
            <a href="#" class="boton-limpiar"><button><i class="fa fa-times" aria-hidden="true"></i> Limpiar</button></a>
        </div>
    </div>

    <div class="cont-table">
        <table class="table">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col" style="width: 5%;">ID</th>
                    <th scope="col" style="width: 25%;">Fecha</th>
                    <th scope="col" style="width: 10%;">Total</th>
                    <th scope="col" style="width: 15%;">Cliente</th>
                    <th scope="col" style="width: 15%;">Trabajador</th>
                    <th scope="col" style="width: 15%;">Producto</th>
                    <th scope="col" style="width: 25%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos['grid'] as $row): ?>
                <tr style="text-align: center;">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><?php echo $row['cliente']; ?></td>
                    <td><?php echo $row['trabajador']; ?></td>
                    <td><?php echo $row['producto']; ?></td>
                    <td>
                        <a href="#" class="boton-visualizar"><button><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?php require_once APP . '/views/inc/footer.php' ?>