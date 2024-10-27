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
                <a href="<?= URL . "/reportes/venta" ?>"><i class="fa-solid fa-print"></i> Venta</a>
                <a href="<?= URL . "/reportes/producto" ?>"><i class="fa-solid fa-print"></i> Producto</a>
            </div>
        </div>
    </div>
</div>

<?php require_once APP . '/views/inc/footer.php' ?>