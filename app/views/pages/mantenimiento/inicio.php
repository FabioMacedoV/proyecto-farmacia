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
            <h1>Bienvenido, <?php echo $_SESSION['Usuario']; ?></h1>

            <div class="contenedor-graficos">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 grafico-template">
                            <h3>Grafico de barras:</h3>
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                        <!--! No encender sin antes preguntar, porque hace scroll hacia abajo fuertemente!-->
                        <!-- <div class="col-md-6 grafico-template">
                            <h3>Grafico circular:</h3>
                            <canvas id="donut" width="400" height="200"></canvas>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$datosNombres = array_map(function ($producto) {
    return $producto['nombre'];
}, $datos["dataGraficos"]);

$datosCantidad = array_map(function ($producto) {
    return $producto['cantidad'];
}, $datos["dataGraficos"]);
?>

<script>
    var dataGraficos = <?php echo json_encode($datosNombres); ?>;
    var cantidades = <?php echo json_encode($datosCantidad); ?>;
</script>

<script src="<?= URL . rutaJsCustom . '/grafico-barras.js' ?>"></script>
<?php require_once APP . '/views/inc/footer.php' ?>