<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<div class="title-empleado">
    <h1>Registro Empleado</h1>
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
                    <label class="label" for="username">DNI:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="DNI" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Apellido Paterno:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Apellido Paterno" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Apellido Materno:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Apellido Materno" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Dirección:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Dirección" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Celular:</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Celular" required>
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