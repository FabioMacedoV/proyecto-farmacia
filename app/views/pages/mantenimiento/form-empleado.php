<?php session_start(); ?>

<?php require_once APP . '/views/inc/header.php' ?>

<?php require_once APP . '/views/inc/nav-mantenimiento.php' ?>

<?php 
    if($datos["tipoRegistro"] == 0){ $titulo = "Registro Empleado"; $url = URL . "/mantenimiento/guardar_empleado";}
    if($datos["tipoRegistro"] == 1){ $titulo = "Actualizar Empleado"; $url = URL . "/mantenimiento/actualizar_empleado";}
?>

<div class="title-empleado">
    <h1><?php echo $titulo?></h1>
</div>

<!-- <pre><?php print_r($datos["empleado"]); ?></pre> -->

<form action="<?php echo $url ?>" method="post">
    <input type="hidden" id="idEmpleado" name="idEmpleado" value="<?php echo(isset($datos["empleado"]['empleado_id']) ? $datos["empleado"]['empleado_id'] : 0); ?>">
    <div class="row">
        <div class="col form-persona">
            <div class="row">
                <div class="col">
                    <label class="label" for="username">Nombre:</label>
                    <input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" value="<?php echo(isset($datos["empleado"]['nombre']) ? $datos["empleado"]['nombre'] : ''); ?>" required>
                </div>
                <div class="col">
                    <label class="label" for="username">DNI:</label>
                    <input class="form-control" type="text" id="txtDni" name="txtDni" placeholder="DNI" value="<?php echo(isset($datos["empleado"]['dni']) ? $datos["empleado"]['dni'] : ''); ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Apellidos:</label>
                    <input class="form-control" type="text" id="txtApellidos" name="txtApellidos" placeholder="Apellidos" value="<?php echo(isset($datos["empleado"]['apellidos']) ? $datos["empleado"]['apellidos'] : ''); ?>"  required>
                </div>

                <div class="col">
                    <label class="label" for="username">Fecha de Nacimiento:</label>
                    <input class="form-control" type="date" id="txtFechaNacimiento" name="txtFechaNacimiento" value="<?php echo(isset($datos["empleado"]['fecha_nacimiento']) ? $datos["empleado"]['fecha_nacimiento'] : ''); ?>" required>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Dirección:</label>
                    <input class="form-control" type="text" id="txtDireccion" name="txtDireccion" placeholder="Dirección" value="<?php echo(isset($datos["empleado"]['direccion']) ? $datos["empleado"]['direccion'] : ''); ?>" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Celular:</label>
                    <input class="form-control" type="text" id="txtCelular" name="txtCelular" placeholder="Celular" value="<?php echo(isset($datos["empleado"]['celular']) ? $datos["empleado"]['celular'] : ''); ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Correo:</label>
                    <input class="form-control" type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo" value="<?php echo(isset($datos["empleado"]['email']) ? $datos["empleado"]['email'] : ''); ?>" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Rol:</label>
                    <select class="form-select" id="selectRol" name="selectRol">
                        <option value="0" <?php echo (isset($datos["empleado"]['rol']) && $datos["empleado"]['rol'] == 0 ? 'selected' : '') ?>>-- Seleccionar --</option>
                        <?php foreach($datos['roles'] as $rol): ?> 
                            <option value="<?php echo $rol['value']; ?>" <?php echo (isset($datos["empleado"]['rol']) && $datos["empleado"]['rol'] == $rol['value'] ? 'selected' : '') ?> ><?php echo $rol['label']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    
        <div class="col form-contrato">
            <div class="row title-form-contrato">
                <h2>DETALLES DE CONTRATO</h2>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Salario:</label>
                    <input class="form-control" type="text" id="txtSalario" name="txtSalario" placeholder="Salario" value="<?php echo(isset($datos["empleado"]['salario']) ? $datos["empleado"]['salario'] : ''); ?>" required>
                </div>
                <div class="col">
                    <label class="label" for="username">Inicio de Contrato:</label>
                    <input class="form-control" type="date" id="dateIniContrato" name="dateIniContrato" value="<?php echo(isset($datos["empleado"]['inicio_contrato']) ? $datos["empleado"]['inicio_contrato'] : ''); ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="label" for="username">Horario:</label>
                    <select class="form-select" id="selectHorario" name="selectHorario">
                        <option value="0" <?php echo (isset($datos["empleado"]['horario']) && $datos["empleado"]['horario'] == 0 ? 'selected' : '') ?>>-- Seleccionar --</option>
                        <?php foreach($datos['horarios'] as $rol): ?>
                        <option value="<?php echo $rol['value']; ?>" <?php echo (isset($datos["empleado"]['horario']) && $datos["empleado"]['horario'] == $rol['value'] ? 'selected' : '') ?> ><?php echo $rol['label']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label class="label" for="username">Fin de Contrato:</label>
                    <input class="form-control" type="date" id="dateFinContrato" name="dateFinContrato" value="<?php echo(isset($datos["empleado"]['final_contrato']) ? $datos["empleado"]['final_contrato'] : ''); ?>" required>
                </div>
            </div>

            <div class="row form-botones">
                <div class="col" style="text-align: end;">
                    <a href="#" class="boton-registrar"><button><i class="fa-solid fa-floppy-disk"></i> Registrar</button></a>
                </div>
                <div class="col">
                    <a class="boton-cancelar"><button onclick="cancelarRegistro()"><i class="fa-solid fa-ban"></i> Cancelar</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php require_once APP . '/views/inc/footer.php' ?>