<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<?php
if ($datos["tipoRegistro"] == 0) {
    $titulo = "Registro Empleado";
    $url = "/mantenimiento/guardar_empleado";
}
if ($datos["tipoRegistro"] == 1) {
    $titulo = "Actualizar Empleado";
    $url = "/mantenimiento/actualizar_empleado";
}
if ($datos["tipoRegistro"] == 2) {
    $titulo = "Visualizar Empleado";
    $url = "/mantenimiento/empleado";
}
?>

<div class="title-empleado">
    <h1><?php echo $titulo ?></h1>
</div>

<form action="<?= URL . $url ?>" method="post">
    <input type="hidden" id="idProducto" name="idProducto" value="<?php echo (isset($datos["producto"]['producto_id']) ? $datos["producto"]['producto_id'] : 0); ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Nombre:</label>
                        <input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" value="<?php echo (isset($datos["producto"]['nombre']) ? $datos["producto"]['nombre'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Categoria:</label>
                        <select class="form-select" id="selectCategoria" name="selectCategoria" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?>>
                            <option value="0" <?php echo (isset($datos["producto"]['categoria']) && $datos["producto"]['categoria'] == 0 ? 'selected' : '') ?>>-- Seleccionar --</option>
                            <?php foreach ($datos['categorias'] as $categoria): ?>
                                <option value="<?php echo $categoria['value']; ?>" <?php echo (isset($datos["producto"]['categoria']) && $datos["producto"]['categoria'] == $categoria['value'] ? 'selected' : '') ?>><?php echo $categoria['label']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Marca:</label>
                        <select class="form-select" id="selectMarca" name="selectMarca" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?>>
                            <option value="0" <?php echo (isset($datos["producto"]['marca']) && $datos["producto"]['marca'] == 0 ? 'selected' : '') ?>>-- Seleccionar --</option>
                            <?php foreach ($datos['marcas'] as $marca): ?>
                                <option value="<?php echo $marca['value']; ?>" <?php echo (isset($datos["producto"]['marca']) && $datos["producto"]['marca'] == $marca['value'] ? 'selected' : '') ?>><?php echo $marca['label']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <label class="label" for="username">Precio:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">S/</span>
                            <input type="text" class="form-control" placeholder="Ingrese precio" name="txtNombre" placeholder="Nombre" value="<?php echo (isset($datos["producto"]['precio']) ? $datos["producto"]['precio'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?>>
                        </div>
                    </div>

                    <div class="col">
                        <label class="label" for="username">Stock:</label>
                        <input class="form-control" type="number" min="0" placeholder="Ingrese Stock" id="txtStock" name="txtStock" placeholder="Stock" value="<?php echo (isset($datos["producto"]['stock']) ? $datos["producto"]['stocks'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Fecha de Vencimiento:</label>
                        <input class="form-control" type="date" placeholder="Fecha de Vencimiento" placeholder="Ingrese Stock" id="txtStock" name="txtStock" placeholder="Stock" value="<?php echo (isset($datos["producto"]['fecha_vencimiento']) ? $datos["producto"]['fecha_vencimiento'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <label class="label" for="username">Descripción:</label>
                        <textarea class="form-control" placeholder="Descripción" id="txtDescripcion" name="txtDescripcion" placeholder="Ingresa una descripción" value="<?php echo (isset($datos["producto"]['descripcion']) ? $datos["producto"]['descripcion'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required></textarea>
                    </div>
                    <div class="col-4">
                        <label class="label" for="username">N° de Unidades:</label>
                        <input class="form-control" type="number" min="0" placeholder="Ingrese Unidades" id="txtunidades" name="txtunidades" value="<?php echo (isset($datos["producto"]['unidad']) ? $datos["producto"]['unidad'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Composición:</label>
                        <textarea class="form-control" placeholder="Ingrese indicaciones" id="txtConosicion" name="txtConposicion" value="<?php echo (isset($datos["producto"]['composicion']) ? $datos["producto"]['composicion'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required></textarea>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Indicaciones de uso:</label>
                        <textarea class="form-control" placeholder="Ingrese indicaciones de uso" id="txtConosicion" name="txtConposicion" value="<?php echo (isset($datos["producto"]['indicador_uso']) ? $datos["producto"]['indicador_uso'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?>  required></textarea>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Contradicciones de uso:</label>
                        <textarea class="form-control" placeholder="Ingrese contradicciones del uso" id="txtContradiccion" name="txtContradiccion" value="<?php echo (isset($datos["producto"]['contradiccciones']) ? $datos["producto"]['contradiccciones'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?>  required></textarea>
                    </div>
                </div>

                <div class="row form-botones">
                    <div class="col" style="text-align: end;">
                        <a href="#" class="boton-registrar"><button><i class="fa-solid fa-floppy-disk"></i> Registrar</button></a>
                    </div>
                    <div class="col">
                        <a href="#" class="boton-cancelar"><button><i class="fa-solid fa-ban"></i> Cancelar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php require_once APP . '/views/inc/footer.php' ?>