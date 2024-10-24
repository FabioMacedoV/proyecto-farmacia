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
                <h1 style="margin: 5px 10px;">Bienvenido, <?php echo $_SESSION['Usuario']; ?></h1>

                <div class="row">
                    <div class="col">
                        <div class="estadistica-template-red">
                            <div class="text-estadistica red"><i class="fa-solid fa-chart-simple"></i> Analitica 1</div>
                            <div class="estadistica red"><?php echo '200' ?></div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="estadistica-template-blue">
                            <div class="text-estadistica blue"><i class="fa-solid fa-chart-simple"></i> Analitica 2</div>
                            <div class="estadistica blue"><?php echo '200' ?></div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="estadistica-template-green">
                            <div class="text-estadistica green"><i class="fa-solid fa-chart-simple"></i> Analitica 3</div>
                            <div class="estadistica green"><?php echo '200' ?></div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="estadistica-template-yelow">
                            <div class="text-estadistica yelow"><i class="fa-solid fa-chart-simple"></i> Analitica 4</div>
                            <div class="estadistica yelow"><?php echo '200' ?></div>
                        </div>
                    </div>
                </div>

                <div class="contenedor-graficos">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Grafico de barras:</h3>
                                <canvas id="myChart" width="400" height="200"></canvas>
                            </div>
                            <!-- <div class="col-md-5">
                                <h3>Grafico circular:</h3>
                                <canvas id="donut" width="400" height="200"></canvas>
                            </div> -->
                        </div>
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