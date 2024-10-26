<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<?php
if ($datos["tipoRegistro"] == 0) {
    $titulo = "Registro Producto";
    $url = "/mantenimiento/guardar_producto";
}
if ($datos["tipoRegistro"] == 1) {
    $titulo = "Actualizar Producto";
    $url = "/mantenimiento/actualizar_producto";
}
if ($datos["tipoRegistro"] == 2) {
    $titulo = "Visualizar Producto";
    $url = "/mantenimiento/producto";
}
?>

<div class="title-empleado">
    <h1><?php echo $titulo ?></h1>
</div>

<!-- <pre><?php print_r($datos["producto"]); ?></pre> -->

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
                            <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Ingrese precio" placeholder="Nombre" value="<?php echo (isset($datos["producto"]['stock']) ? $datos["producto"]['stock'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?>>
                        </div>
                    </div>

                    <div class="col">
                        <label class="label" for="username">Stock:</label>
                        <input class="form-control" type="number" min="0" placeholder="Ingrese Stock" id="txtStock" name="txtStock" placeholder="Stock" value="<?php echo (isset($datos["producto"]['stock']) ? $datos["producto"]['stock'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Fecha de Vencimiento:</label>
                        <input class="form-control" type="date" placeholder="Fecha de Vencimiento" id="dateFechaVencimiento" name="dateFechaVencimiento" placeholder="Stock" value="<?php echo (isset($datos["producto"]['fecha_vencimiento']) ? $datos["producto"]['fecha_vencimiento'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <label class="label" for="username">Descripción:</label>
                        <textarea class="form-control" placeholder="Descripción" id="txtDescripcion" name="txtDescripcion" placeholder="Ingresa una descripción" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required> <?php echo (isset($datos["producto"]['descripcion']) ? $datos["producto"]['descripcion'] : ''); ?> </textarea>
                    </div>
                    <div class="col-4">
                        <label class="label" for="username">Proveedor:</label>
                        <select class="form-select" id="selectProveedor" name="selectProveedor" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?>>
                            <option value="0" <?php echo (isset($datos["producto"]['proveedor']) && $datos["producto"]['proveedor'] == 0 ? 'selected' : '') ?>>-- Seleccionar --</option>
                            <?php foreach ($datos['proveedores'] as $marca): ?>
                                <option value="<?php echo $marca['value']; ?>" <?php echo (isset($datos["producto"]['proveedor']) && $datos["producto"]['proveedor'] == $marca['value'] ? 'selected' : '') ?>><?php echo $marca['label']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Indicaciones de uso:</label>
                        <textarea class="form-control" placeholder="Ingrese indicaciones de uso" id="txtIndicaciones" name="txtIndicaciones" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required> <?php echo (isset($datos["producto"]['indicaciones']) ? $datos["producto"]['indicaciones'] : ''); ?> </textarea>
                    </div>
                    <div class="col">
                        <label class="label" for="username">Contradicciones de uso:</label>
                        <textarea class="form-control" placeholder="Ingrese contradicciones de uso" id="txtContradiccion" name="txtContradiccion" <?php echo ($datos["tipoRegistro"] == 2 ? 'disabled' : '') ?> required> <?php echo (isset($datos["producto"]['contraindicaciones']) ? $datos["producto"]['contraindicaciones'] : ''); ?></textarea>
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