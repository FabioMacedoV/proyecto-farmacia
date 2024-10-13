<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<div class="container title-workers">
    <h2>Bienvenido al listado de Empleados</h2> 
    <a href="#" class="boton"><button><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button></a>
</div>

<div class="container table-workers">
    <div class="nav-table">
        <h3>Consultar empleado: </h3>
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
                    <th scope="col" style="width: 30%;">Empleado</th>
                    <th scope="col" style="width: 10%;">Edad</th>
                    <th scope="col" style="width: 15%;">Cargo</th>
                    <th scope="col" style="width: 15%;">Salario</th>
                    <th scope="col" style="width: 25%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos['grid'] as $row): ?>
                <tr style="text-align: center;">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['edad']; ?></td>
                    <td><?php echo $row['cargo']; ?></td>
                    <td><?php echo "s/".$row['salario'].".00"; ?></td>
                    <td>
                        <a href="#" class="boton-visualizar"><button><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                        <a href="#" class="boton-editar"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                        <a href="#" class="boton-eliminar"><button><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?php require_once APP . '/views/inc/footer.php' ?>