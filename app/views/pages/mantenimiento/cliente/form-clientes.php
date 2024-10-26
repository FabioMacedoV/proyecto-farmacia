<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<?php
if ($datos["tipoRegistro"] == 0) {
    $titulo = "Registro Cliente";
    $url = "/mantenimiento/guardar_cliente";
}
if ($datos["tipoRegistro"] == 1) {
    $titulo = "Actualizar Cliente";
    $url = "/mantenimiento/actualizar_cliente";
}
if ($datos["tipoRegistro"] == 2) {
    $titulo = "Visualizar Cliente";
    $url = "/mantenimiento/cliente";
}
?>

<div class="title-empleado">
    <h1><?php echo $titulo ?></h1>
</div>

<!-- <pre><?php print_r($datos["cliente"]); ?></pre> -->

<form action="<?= URL . $url ?>" method="post">
    <input type="hidden" id="idCliente" name="idCliente" value="<?php echo (isset($datos["cliente"]['cliente_id']) ? $datos["cliente"]['cliente_id'] : 0); ?>">
    <div class="container">
        <div class="row">
            <div class="col form-persona">
                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Nombre:</label>
                        <input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" value="<?php echo (isset($datos["cliente"]['nombre']) ? $datos["cliente"]['nombre'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                    <div class="col">
                        <label class="label" for="username">DNI:</label>
                        <input class="form-control" type="text" id="txtDni" name="txtDni" placeholder="DNI" value="<?php echo (isset($datos["cliente"]['dni']) ? $datos["cliente"]['dni'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Apellidos:</label>
                        <input class="form-control" type="text" id="txtApellidos" name="txtApellidos" placeholder="Apellidos" value="<?php echo (isset($datos["cliente"]['apellidos']) ? $datos["cliente"]['apellidos'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Correo:</label>
                        <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="Correo" value="<?php echo (isset($datos["cliente"]['email']) ? $datos["cliente"]['email'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Celular:</label>
                        <input class="form-control" type="text" id="txtCelular" name="txtCelular" placeholder="Celular" value="<?php echo (isset($datos["cliente"]['celular']) ? $datos["cliente"]['celular'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                </div>
    
                <div class="row form-botones">
                <div class="col" style="text-align: end;">
                        <?php if ($datos["tipoRegistro"] == 0) : ?>
                            <a class="boton-registrar"><button><i class="fa-solid fa-floppy-disk"></i> Registrar</button></a>
                        <?php elseif ($datos["tipoRegistro"] == 1): ?>
                            <a class="boton-registrar"><button><i class="fa-solid fa-floppy-disk"></i> Actualizar</button></a>
                        <?php endif; ?>
                    </div>

                    <div class="col">
                        <?php if ($datos["tipoRegistro"] == 0) : ?>
                            <a class="boton-cancelar"><button onclick="cancelarRegistro()"><i class="fa-solid fa-ban"></i> Cancelar</button></a>
                        <?php else: ?>
                            <a class="boton-cancelar"><button onclick="regresarRegistro()"><i class="fa-solid fa-share"></i> Regresar</button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php require_once APP . '/views/inc/footer.php' ?>