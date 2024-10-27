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

function buscarProducto(){
    let producto = document.getElementById('selectProducto').value;

    if (producto === '0') {
        alert('Selecciona un producto válido.');
        return;
    }

    fetch(`http://localhost:8080/proyecto-farmacia/mantenimiento/buscar_producto?producto=${producto}`)
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('txtDescripcion').value = data.modelProducto[0].descripcion || '';
            document.getElementById('txtStock').value = data.modelProducto[0].stock || '';
            document.getElementById('txtPrecio').value = data.modelProducto[0].precio || '';
        } else {
            alert('Producto no encontrado.');
        }
    }).catch(error => console.error('Error:', error));
}

function agregarProducto(){
    debugger
    let id_doc = document.getElementById("selectDoc").value;
    let producto = document.getElementById("selectProducto").value;
    let descripcion = document.getElementById("txtDescripcion").value;
    let stock = document.getElementById("txtStock").value;
    let precio = document.getElementById("txtPrecio").value;
    let cantidad = document.getElementById("txtCantidad").value;

}