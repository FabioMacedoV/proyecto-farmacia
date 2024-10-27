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
                <h2>Reporte de Productos</h2>
            </div>

            <div class="container table-workers">
                <div class="nav-table">
                    <h6>Selecciona la Categoría:</h6>
                    <select class="form-select input-buscador" id="selec453" name="selec453">
                        <option value="0" selected>-- Seleccionar --</option>
                        <option value="1"> Prueba 1</option>
                    </select>
                    <h6>Selecciona la Categoría:</h6>
                    <select class="form-select input-buscador" id="selec453" name="selec453">
                        <option value="0" selected>-- Seleccionar --</option>
                        <option value="1"> Prueba 1</option>
                    </select>
                </div>
                <div class="contenedor-prueba">
                    <button type="button" class="btn btn-success">Filtrar</button>
                    <button class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button>
                </div>

            </div>

            <div class="cont-table table-wrapper">
                <table class="table">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col" style="width: 5%;">ID</th>
                            <th scope="col" style="width: 20%;">Nombre del Producto</th>
                            <th scope="col" style="width: 20%;">Descripción</th>
                            <th scope="col" style="width: 30%;">Precio</th>
                            <th scope="col" style="width: 25%;">Proveedor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Paracetamol 500mg</td>
                            <td>Medicamentos</td>
                            <td>S/. 2.00</td>
                            <td>Laboratorios ACME</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Omega 3</td>
                            <td>Suplementos</td>
                            <td>S/. 6.50</td>
                            <td>Suplementos XYZ</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ibuprofeno 600mg</td>
                            <td>Medicamentos</td>
                            <td>S/. 4.50</td>
                            <td>Laboratorios ACME</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="footer">
                <div class="total-inventory">
                    Precio total de productos: S/. 540
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= URL . rutaJsCustom . '/reportes/reporte-producto.js' ?>"></script>
<?php require_once APP . '/views/inc/footer.php' ?>