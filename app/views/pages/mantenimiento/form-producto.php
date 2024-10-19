<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<div class="title-empleado">
    <h1>Registro de Productos</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col form-persona">
            <div class="row">
                <div class="col">
                    <label class="label" for="username">Nombre:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Nombre" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Categoria:</label>
                    <select class="form-select">
                        <option value="0" selected>-- Seleccionar --</option>
                        <?php foreach($datos['categorias'] as $rol): ?>
                            <option value="<?php echo $rol['value']; ?>"><?php echo $rol['label']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label class="label" for="username">Marca:</label>
                    <select class="form-select">
                        <option value="0" selected>-- Seleccionar --</option>
                        <?php foreach($datos['marcas'] as $rol): ?>
                            <option value="<?php echo $rol['value']; ?>"><?php echo $rol['label']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <label class="label" for="username">Precio:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">S/</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="col">
                    <label class="label" for="username">Stock:</label>
                    <input class="form-control" type="number" id="username" name="username" min="0" placeholder="Apellido Materno" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Fecha de Vencimiento:</label>
                    <input class="form-control" type="date" id="username" name="username" placeholder="Apellido Materno" required>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <label class="label" for="username">Descripción:</label>
                    <textarea class="form-control" id="floatingTextarea" placeholder="Descripción" name="username" required></textarea>
                </div>
                <div class="col-4">
                    <label class="label" for="username">N° de Unidades:</label>
                    <input class="form-control" type="number" id="username" min="0" name="username" placeholder="Unidades" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Composición:</label>
                    <textarea class="form-control" id="floatingTextarea" placeholder="Composición" name="username" required></textarea>
                </div>
                <div class="col">
                    <label class="label" for="username">Indicaciones de uso:</label>
                    <textarea class="form-control" id="floatingTextarea" placeholder="Indicaciones de uso" name="username" required></textarea>
                </div>
                <div class="col">
                    <label class="label" for="username">Contradicciones de uso:</label>
                    <textarea class="form-control" id="floatingTextarea" placeholder="Contradicciones de uso" name="username" required></textarea>
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

<?php require_once APP . '/views/inc/footer.php' ?>