function buscarVenta() {
    var nombre = document.getElementById('txtBuscador').value;
    if(nombre){
        window.location.href = 'venta?nombre=' + nombre;
    }
}

function limpiarBusqueda(){
    document.getElementById('txtBuscador').value = '';
    window.location.href = 'venta';
}