<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<?php
if ($datos["tipoRegistro"] == 0) {
    $titulo = "Registro de Venta";
    $fecha = new DateTime("");
    $fecha = $fecha->format('Y-m-d');
}

if ($datos["tipoRegistro"] == 1) {
    $titulo = "Visualizar Venta";
}
if(isset($datos["grid"])){
    $productos = json_encode($datos['grid']);
}else{
    $productos = json_encode([]);
}
?>

<div class="title-empleado">
    <h1><?php echo $titulo ?></h1>
</div>

<input type="hidden" id="idVenta" name="idVenta" value="<?php echo (isset($datos["venta"]['venta_id']) ? $datos["venta"]['venta_id'] : 0); ?>">
<div class="contenedor">
    <div class="row">
        <div class="col campo">
            <div class="row">
                <div class="col">
                    <div class="bordered-div-tipo-producto">
                        <div class="campo">
                            <select class="form-select" id="selectDoc" name="selectDoc" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?> required>
                                <option value="0" selected>Seleccionar</option>
                                <?php foreach ($datos['tipo-documento'] as $rol): ?>
                                    <option value="<?php echo $rol['value']; ?>" <?php echo (isset($datos["venta"]['documento']) && $datos["venta"]['documento'] == $rol['value'] ? 'selected' : '') ?>><?php echo $rol['label']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bordered-div-fecha-venta">
                        <div class="campo">
                            <input class="form-control" type="date" id="fcFecha" name="fcFecha" placeholder="Nombre" value="<?php echo (isset($datos["venta"]['fecha']) ? $datos["venta"]['fecha'] : $fecha); ?>" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?> required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label class="label" for="username">Número:</label>
                    <div class="input-group">
                        <input type="text" placeholder="987654321" id="txtNumero" name="txtNumero" class="form-control" value="<?php echo (isset($datos["venta"]['numero']) ? $datos["venta"]['numero'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?> required>
                    </div>
                </div>
            </div>
            <div class="bordered-div-cliente">
                <div class="row">
                    <div class="col">
                        <select class="form-select" id="selectCliente" name="selectCliente" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?>>
                            <option value="0" selected>Seleccionar</option>
                            <?php foreach ($datos['clientes'] as $rol): ?>
                                <option value="<?php echo $rol['value']; ?>" <?php echo (isset($datos["venta"]['cliente']) && $datos["venta"]['cliente'] == $rol['value'] ? 'selected' : '') ?>><?php echo $rol['label']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="bordered-div-trabajador">
                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Trabajador(a):</label>
                        <input class="form-control" type="text" id="txtNombreTrabajador" name="txtNombreTrabajador" placeholder="Trabajador(a)" value="<?php echo (isset($datos["venta"]['trabajador']) ? $datos["venta"]['trabajador'] : $_SESSION['Usuario']); ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="bordered-div-producto">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label class="label" for="username">Producto:</label>
                                <select class="form-select" id="selectProducto" name="selectProducto" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?>>
                                    <option value="0" selected>Seleccionar</option>
                                    <?php foreach ($datos['productos'] as $rol): ?>
                                        <option value="<?php echo $rol['value']; ?>"><?php echo $rol['label']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label class="label" for="username">Descripcion:</label>
                                <input class="form-control" type="text" id="txtDescripcion" name="txtDescripcion" placeholder="Descripcion" value="" disabled>
                            </div>
                            <div class="col form-botones-custom">
                                <?php if (!$datos["tipoRegistro"] == 1) : ?>
                                    <a class="boton-agregar"><button type="button" onclick="buscarProducto()"><i class="fas fa-search"></i> Buscar</button></a>
                                    <a class="boton-agregar"><button type="button" onclick="agregarProducto()"><i class="fa-solid fa-share"></i> Agregar</button></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="label" for="username">Stock:</label>
                                <input class="form-control" type="text" id="txtStock" name="txtStock" placeholder="Stock" value="" disabled>
                            </div>
                            <div class="col">
                                <label class="label" for="username">Precio Unitario:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">S/</span>
                                    <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Precio" value="" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <label class="label" for="username">Cantidad:</label>
                                <input class="form-control" type="number" id="txtCantidad" name="txtCantidad" placeholder="Nombre" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?>>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col campo">

            <div class="row">
                <div class="col table-wrapper">
                    <table class="table">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col" style="width: 25%;">Producto</th>
                                <th scope="col" style="width: 45%;">Descripcion</th>
                                <th scope="col" style="width: 15%;">Cantidad</th>
                                <th scope="col" style="width: 15%;">Precio</th>
                            </tr>
                        </thead>
                        <tbody id="tablaMedicamentos">
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Inpuesto:</label>
                    <input class="form-control" type="text" id="txtInpuesto" name="txtInpuesto" placeholder="Inpuesto" value="<?php echo (isset($datos["venta"]['impuestos']) ? $datos["venta"]['impuestos'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?> required>
                </div>
                <div class="col">
                    <label class="label" for="username">Descuento:</label>
                    <input class="form-control" type="text" id="txtDescuento" name="txtDescuento" placeholder="Descuento" value="<?php echo (isset($datos["venta"]['descuento']) ? $datos["venta"]['descuento'] : ''); ?>" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?> required>
                </div>
                <div class="col">
                    <label class="label" for="username">Total:</label>
                    <input class="form-control" type="text" id="txtTotal" name="txtTotal" placeholder="Total" value="<?php echo (isset($datos["venta"]['total']) ? $datos["venta"]['total'] : '0'); ?>" <?php echo ($datos["tipoRegistro"] == 1 ? 'disabled' : '') ?> required>
                </div>
            </div>

            <div class="row form-botones">
                <div class="col" style="text-align: end;">
                    <?php if ($datos["tipoRegistro"] == 0) : ?>
                        <a class="boton-registrar"><button type="button" onclick="guardarVenta()"><i class="fa-solid fa-floppy-disk"></i> Registrar</button></a>
                    <?php endif; ?>
                </div>

                <div class="col">
                    <?php if ($datos["tipoRegistro"] == 0) : ?>
                        <a href="<?= URL . "/mantenimiento/venta" ?>" class="boton-cancelar"><button><i class="fa-solid fa-ban"></i> Cancelar</button></a>
                    <?php else: ?>
                        <a href="<?= URL . "/mantenimiento/venta" ?>" class="boton-cancelar"><button><i class="fa-solid fa-share"></i> Regresar</button></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var idTrabajador = <?php echo $_SESSION['IdUsuario']?>;
let productos = [];

let listaProductoVisualizar = <?php echo $productos ?>;

function actualizarTabla(){
    const tbody = document.getElementById("tablaMedicamentos");
    tbody.innerHTML = "";

    productos.forEach((producto) => {
        const row = tbody.insertRow();
        row.innerHTML = `
            <td>${producto.nombre}</td>
            <td>${producto.descripcion}</td>
            <td>${producto.cantidad}</td>
            <td>${producto.precio}</td>`;
    });
};

function cargarDatos(){
    listaProductoVisualizar.forEach(productoF => {
        let producto = {
            id: productoF.id,
            nombre: productoF.nombre,
            descripcion: productoF.descripcion,
            cantidad: productoF.cantidad,
            precio: productoF.precio
        }
        productos.push(producto);
    });
    actualizarTabla();
}

if(listaProductoVisualizar != []){
    cargarDatos();
}

</script>
<?php require_once APP . '/views/inc/footer.php' ?>