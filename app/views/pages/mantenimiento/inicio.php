<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<div class="title-dashboard">
    <h2>Bienvenido, <?php echo $_SESSION['Usuario']; ?></h2>
</div>

<!-- <pre><?php print_r($datos["prueba"]); ?></pre> -->

<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="donut" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <?php
        $datosNombres = array_map(function($producto) {
            return $producto['nombre'];
        }, $datos["dataGraficos"]);

        $datosCantidad = array_map(function($producto) {
            return $producto['cantidad'];
        }, $datos["dataGraficos"]);
    ?>

<script>
    var dataGraficos = <?php echo json_encode($datosNombres); ?>;
    var cantidades = <?php echo json_encode($datosCantidad); ?>;
</script>

    <script src="<?= URL . rutaJsCustom. '/grafico-barras.js' ?>"></script>
<?php require_once APP . '/views/inc/footer.php' ?>