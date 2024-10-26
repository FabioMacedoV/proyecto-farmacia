<?php session_start(); ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<div class="title-empleado">
    <h1>Orden de Venta</h1>
</div>

<div class="contenedor">
    <div class="row">

        <div class="col campo">

            <div class="row">

                <div class="col">
                    <div class="bordered-div-tipo-producto">
                        <div class="campo">
                            <select class="form-select">
                                <option value="0" selected>Seleccionar</option>
                                <?php foreach($datos['tipo-documento'] as $rol): ?>
                                <option value="<?php echo $rol['value']; ?>"><?php echo $rol['label']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="bordered-div-fecha-venta">
                        <div class="campo">
                            <input class="form-control" type="date" id="username" name="username" placeholder="Nombre" required>
                        </div>
                    </div>
                </div>

                <div class="col">
                <label class="label" for="username">Número:</label>
                    <div class="input-group">
                        <input type="text" placeholder="+51" class="form-control col-3" style="max-width: 80px;">
                        <input type="text" placeholder="987654321" class="form-control">
                    </div>
                </div>

            </div>

            <div class="bordered-div-cliente">
                <div class="row">
                    <div class="col-6">
                        <label class="label" for="username">DNI:</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="DNI" required>
                    </div>

                    <div class="col-6">
                        <label class="label" for="username">Cliente:</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="Cliente" required>
                    </div>
                </div>
            </div>

            <div class="bordered-div-trabajador">

                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Trabajador(a):</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="Trabajador(a)" required>
                    </div>
                </div>

            </div>

            <div class="bordered-div-producto">

                <div class="row">

                    <div class="col">

                        <div class="row">

                            <div class="col">
                                <label class="label" for="username">Producto:</label>
                                <select class="form-select">
                                    <option value="0" selected>Seleccionar</option>
                                    <?php foreach($datos['productos'] as $rol): ?>
                                    <option value="<?php echo $rol['value']; ?>"><?php echo $rol['label']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col">
                                <label class="label" for="username">Descripcion:</label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Descripcion" required>
                            </div>

                            <div class="col form-botones-custom">
                                <a href="#" class="boton-agregar"><button><i class="fa-solid fa-share"></i> Agregar</button></a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col">
                                <label class="label" for="username">Stock:</label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Stock" disabled>
                            </div>

                            <div class="col">
                                <label class="label" for="username">Precio Unitario:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">S/</span>
                                    <input type="text" class="form-control" placeholder="Precio" disabled>
                                </div>
                            </div>

                            <div class="col">
                                <label class="label" for="username">Cantidad:</label>
                                <input class="form-control" type="number" id="username" name="username" placeholder="Nombre" min="0" value ="0">
                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

        <div class="col campo">

            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 25%;">Producto</th>
                                <th scope="col" style="width: 45%;">Descripcion</th>
                                <th scope="col" style="width: 15%;">Cantidad</th>
                                <th scope="col" style="width: 15%;">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pañales</td>
                                <td>Paquete de pañales Huggies XG</td>
                                <td>1</td>
                                <td>S/14.90</td>
                            </tr>
                            <tr>
                                <td>Paracetamol</td>
                                <td>Blister de paracetamol de 500g</td>
                                <td>3</td>
                                <td>S/2.90</td>
                            </tr>
                            <tr>
                                <td>Shampoo</td>
                                <td>shampoo Head and Shoulders de 375ml</td>
                                <td>1</td>
                                <td>S/18.50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Descuento:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Descuento" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Inpuesto:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Inpuesto" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Total:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Total" required>
                </div>
            </div>

            <div class="bordered-div-pago">
                <div class="row">
                    <div class="col">
                        <label class="label" for="username">Monto:</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="Monto" required>
                    </div><div class="col">
                        <label class="label" for="username">Vuelto:</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="Vuelto" required>
                    </div>
                </div>
            </div>

            <div class="row form-botones">
                <div class="col" style="text-align: end">
                    <a href="#" class="boton-registrar"><button><i class="fa-solid fa-floppy-disk"></i> Imprimir y terminar</button></a>
                </div>
                <div class="col">
                    <a href="#" class="boton-cancelar"><button><i class="fa-solid fa-floppy-disk"></i> Cancelar</button></a>
                </div>
            </div>
            
        </div>

    </div>
</div>

<?php require_once APP . '/views/inc/footer.php' ?>