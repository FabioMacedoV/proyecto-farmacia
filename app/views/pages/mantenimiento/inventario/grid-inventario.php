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
                <h2>Bienvenido al listado de Inventario</h2>
                <!-- <a href="<?= URL . "/mantenimiento/registro_empleado" ?>" class="boton"><button><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button></a> -->
            </div>
            <div class="container-fluid row">
                <div class="col-4">
                    <label for="nombreLista" class="form-label">Selecciona un producto</label>
                    <ul id="nombreLista" class="list-group">
                        <?php if (!empty($datos['productos'])) : ?>
                            <?php foreach ($datos['productos'] as $producto) : ?>
                                <li class="list-group-item" onclick="rellenarDatos(<?php echo (int)$producto['value']; ?>)">
                <?php echo htmlspecialchars($producto['label'], ENT_QUOTES, 'UTF-8'); ?>
            </li>
        <?php endforeach; ?>
    <?php else : ?>
        <li class="list-group-item">No hay productos disponibles</li>
    <?php endif; ?>
</ul>
                </div>
                <div class="col-8 p-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Fecha ingreso</th>
                                <th scope="col">Fecha vencimiento</th>
                                <th scope="col">Proveedor</th>
                            </tr>
                        </thead>
                        <tbody id="tablaDatos">
                            <tr>
                                <td colspan="5">Selecciona un producto para ver los detalles.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .list-group-item:hover {
        background-color: #007bff; 
        color: white;              
        cursor: pointer;          
    }

    #nombreLista {
        max-height: 600px; 
        overflow-y: auto;  
    }
</style>
<script>
    function rellenarDatos(productoId) {
    // Hacer una solicitud AJAX para obtener los detalles del producto
    fetch(`<?php echo URL; ?>/mantenimiento/obtenerDetallesProducto?producto_id=${productoId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la red: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            // Limpiar la tabla
            const tablaDatos = document.getElementById('tablaDatos');
            tablaDatos.innerHTML = '';

            if (data) {
                // Agregar los nuevos datos
                const nuevaFila = `
                    <tr>
                        <td>${data.cantidad}</td>
                        <td>${new Date(data.fechaingreso).toLocaleDateString()}</td>
                        <td>${new Date(data.fechavencimiento).toLocaleDateString()}</td>
                        <td>${data.proveedor}</td>
                    </tr>
                `;
                tablaDatos.innerHTML = nuevaFila;
            } else {
                tablaDatos.innerHTML = '<tr><td colspan="5">No se encontraron detalles para este producto.</td></tr>';
            }
        })
        .catch(error => {
            console.error('Error al obtener los detalles del producto:', error);
            // Limpiar la tabla en caso de error
            const tablaDatos = document.getElementById('tablaDatos');
            tablaDatos.innerHTML = '<tr><td colspan="5">Error al cargar los datos.</td></tr>';
        });
}

</script>

<?php require_once APP . '/views/inc/footer.php' ?>