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
            <div class="col">
                <!-- <pre><?php print_r($datos["cantidadVentasMes"]); ?></pre> -->

                <h1 style="margin: 5px 10px;">Bienvenido, <?php echo $_SESSION['Usuario']; ?></h1>

                <div class="row">
                    <div class="col">
                        <div class="estadistica-template-red">
                            <div class="text-estadistica red"><i class="fa-solid fa-chart-simple"></i> Ventas del Mes de <?php echo $datos["ventaMes"]['mes'] ?></div>
                            <div class="estadistica red"><?php echo $datos["ventaMes"]['venta_mes'] ?></div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="estadistica-template-blue">
                            <div class="text-estadistica blue"><i class="fa-solid fa-chart-line"></i> Producto más vendido</div>
                            <div class="estadistica blue"><?php echo $datos["productoVendido"]['producto'] ?></div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="estadistica-template-green">
                            <div class="text-estadistica green"><i class="fa-regular fa-chart-bar"></i> Ventas de Hoy</div>
                            <div class="estadistica green"><?php echo $datos["ventaDiaria"]['venta_hoy']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h3>Clientes Frecuentes:</h3>
                        <canvas id="clientesFrecuentes" width="400" height="230"></canvas>
                    </div>
                    <div class="col-6">
                        <h3>Ventas por cada Mes:</h3>
                        <canvas id="ventasMes" width="400" height="230"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$datosNombres = array_map(function ($producto) {
    return $producto['cliente'];
}, $datos["clientesFrecuentes"]);

$datosCantidad = array_map(function ($producto) {
    return $producto['total_compras'];
}, $datos["clientesFrecuentes"]);

$datosMeses = array_map(function ($producto) {
    return $producto['mes'];
}, $datos["cantidadVentasMes"]);

$datosVentas = array_map(function ($producto) {
    return $producto['venta_mes'];
}, $datos["cantidadVentasMes"]);
?>

<script>
    var nombresClientes = <?php echo json_encode($datosNombres); ?>;
    var totalCompras = <?php echo json_encode($datosCantidad); ?>;
    var nombreMeses = <?php echo json_encode($datosMeses); ?>;
    var datosVentas = <?php echo json_encode($datosVentas); ?>;
</script>

<script src="<?= URL . rutaJsCustom . '/grafico-barras.js' ?>"></script>
<?php require_once APP . '/views/inc/footer.php' ?>