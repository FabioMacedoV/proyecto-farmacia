function buscarProducto() {
    var nombre = document.getElementById('txtBuscador').value;
    if(nombre){
        window.location.href = 'producto?nombre=' + nombre;
    }
}

function limpiarBusqueda(){
    document.getElementById('txtBuscador').value = '';
    window.location.href = 'producto';
}

function cancelarRegistro(){
    document.getElementById('txtNombre').value = null;
    document.getElementById('selectCategoria').value = 0;
    document.getElementById('selectMarca').value = 0;
    document.getElementById('txtPrecio').value = null;
    document.getElementById('txtStock').value = null;
    document.getElementById('dateFechaVencimiento').value = null;
    document.getElementById('txtDescripcion').value = null;
    document.getElementById('selectProveedor').value = 0;
    document.getElementById('txtIndicaciones').value = null;
    document.getElementById('txtContradiccion').value = null;
    window.location.href = 'producto';
}

function regresarRegistro(){
    document.getElementById('txtNombre').value = null;
    document.getElementById('selectCategoria').value = 0;
    document.getElementById('selectMarca').value = 0;
    document.getElementById('txtPrecio').value = null;
    document.getElementById('txtStock').value = null;
    document.getElementById('dateFechaVencimiento').value = null;
    document.getElementById('txtDescripcion').value = null;
    document.getElementById('selectProveedor').value = 0;
    document.getElementById('txtIndicaciones').value = null;
    document.getElementById('txtContradiccion').value = null;
    window.history.back();
}

function confirmacionEliminar(id){
    if (confirm("¿Estás seguro de que quieres eliminar el registro?")) {
        window.location.href = 'eliminar_producto/' + id;
    } else {
        
    }
}