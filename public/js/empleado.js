function buscarEmpleado() {
    var nombre = document.getElementById('txtBuscador').value;
    if(nombre){
        window.location.href = 'empleado?nombre=' + nombre;
    }
}

function limpiarBusqueda(){
    document.getElementById('txtBuscador').value = '';
    window.location.href = 'empleado';
}

function cancelarRegistro(){
    document.getElementById('txtNombre').value = null;
    document.getElementById('txtDni').value = null;
    document.getElementById('txtApellidos').value = null;
    document.getElementById('txtDireccion').value = null;
    document.getElementById('txtCelular').value = null;
    document.getElementById('txtCorreo').value = null;
    document.getElementById('selectRol').value = 0;
    document.getElementById('txtSalario').value = null;
    document.getElementById('dateIniContrato').value = null;
    document.getElementById('selectHorario').value = 0;
    document.getElementById('dateFinContrato').value = null;
    window.location.href = 'empleado';
}

function regresarRegistro(){
    document.getElementById('txtNombre').value = null;
    document.getElementById('txtDni').value = null;
    document.getElementById('txtApellidos').value = null;
    document.getElementById('txtDireccion').value = null;
    document.getElementById('txtCelular').value = null;
    document.getElementById('txtCorreo').value = null;
    document.getElementById('selectRol').value = 0;
    document.getElementById('txtSalario').value = null;
    document.getElementById('dateIniContrato').value = null;
    document.getElementById('selectHorario').value = 0;
    document.getElementById('dateFinContrato').value = null;
    window.history.back();
}