function buscarInventario() {
    var nombre = document.getElementById('txtBuscador').value;
    if(nombre){
        window.location.href = 'inventario?nombre=' + nombre;
    }
}

function limpiarBusqueda(){
    document.getElementById('txtBuscador').value = '';
    window.location.href = 'inventario';
}