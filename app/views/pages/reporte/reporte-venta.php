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
                <h2>Reporte Mensual de Ventas</h2>
            </div>
            <div class="container table-workers">
                <div class="nav-table">
                    <h3>Selecciona el Mes: </h3>
                    <input type="month" id="mes" name="mes" class="form-control d-inline-block w-auto">
                    <button type="button" class="btn btn-custom ml-2">Filtrar</button>
                </div>
            </div>
            <div class="cont-table table-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha Creación</th>
                            <th>Cliente</th>
                            <th>No. de Producto</th>
                            <th>Vendido por</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>February 27, 2024 5:48 PM</td>
                            <td>20240228-0001 CARLOS</td>
                            <td>1</td>
                            <td>NickyMedic</td>
                            <td>120.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>February 12, 2024 7:18 PM</td>
                            <td>GENÉRICO</td>
                            <td>1</td>
                            <td>NickyMedic</td>
                            <td>120.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>February 08, 2024 4:20 PM</td>
                            <td>GENÉRICO</td>
                            <td>1</td>
                            <td>NickyMedic</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>February 06, 2024 3:20 PM</td>
                            <td>GENÉRICO</td>
                            <td>1</td>
                            <td>NickyMedic</td>
                            <td>1,520.00</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>February 01, 2024 3:57 PM</td>
                            <td>20230231-0014 ANAHI PONCE 2023</td>
                            <td>1</td>
                            <td>NickyMedic</td>
                            <td>120.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-right total-sales">
                Total de ventas realizadas este mes: 1,888.00
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<?php require_once APP . '/views/inc/footer.php' ?>