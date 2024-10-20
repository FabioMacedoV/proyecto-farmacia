<?php session_start(); ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<div class="container title-workers">
    <h2>Bienvenido al listado de Ventas</h2>
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
                    <th scope="col" style="width: 10%;">ID</th>
                    <th scope="col" style="width: 25%;">Fecha</th>
                    <th scope="col" style="width: 15%;">Total</th>
                    <th scope="col" style="width: 20%;">Cliente</th>
                    <th scope="col" style="width: 20%;">Trabajador</th>
                    <th scope="col" style="width: 20%;">Producto</th>
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
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?php require_once APP . '/views/inc/footer.php' ?>