function buscarCliente() {
    var nombre = document.getElementById('txtBuscador').value;
    if(nombre){
        window.location.href = 'cliente?nombre=' + nombre;
    }
}

function limpiarBusqueda(){
    document.getElementById('txtBuscador').value = '';
    window.location.href = 'cliente';
}

function cancelarRegistro(){
    document.getElementById('txtNombre').value = null;
    document.getElementById('txtDni').value = null;
    document.getElementById('txtApellidos').value = null;
    document.getElementById('txtEmail').value = null;
    document.getElementById('txtCelular').value = null;
    window.location.href = 'cliente';
}

function regresarRegistro(){
    document.getElementById('txtNombre').value = null;
    document.getElementById('txtDni').value = null;
    document.getElementById('txtApellidos').value = null;
    document.getElementById('txtEmail').value = null;
    document.getElementById('txtCelular').value = null;
    window.history.back();
}

function confirmacionEliminar(id){
    if (confirm("¿Estás seguro de que quieres eliminar el registro?")) {
        window.location.href = 'eliminar_cliente/' + id;
    } else {
        
    }
}