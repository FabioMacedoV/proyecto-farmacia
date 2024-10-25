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