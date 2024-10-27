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

let productos = [];

function agregarProducto(){
    debugger
    const productoSeleccionado = document.getElementById('selectProducto');
    
    const descripcion = document.getElementById('txtDescripcion').value;
    const precio = document.getElementById('txtPrecio').value;
    const cantidad = document.getElementById('txtCantidad').value;

    if (!productoSeleccionado.value || !descripcion || !precio || !cantidad) {
        alert("Por favor, complete todos los campos del producto");
        return;
    }

    const opcionSeleccionada = productoSeleccionado.options[productoSeleccionado.selectedIndex];
    const producto = {
        id: productoSeleccionado.value,
        nombre: opcionSeleccionada.text,
        descripcion: descripcion,
        cantidad: cantidad,
        precio: precio
    }

    productos.push(producto);
    actualizarTabla();
    calcularTotales();
    limpiarProducto();
}

function actualizarTabla(){
    const tbody = document.getElementById("tablaMedicamentos");
    tbody.innerHTML = "";

    productos.forEach((producto) => {
        const row = tbody.insertRow();
        row.innerHTML = `
            <td>${producto.nombre}</td>
            <td>${producto.descripcion}</td>
            <td>${producto.cantidad}</td>
            <td>${producto.precio}</td>`;
    });
};

function calcularTotales(){
    const total = productos.reduce((sum, product) => sum + product.total, 0);
    document.getElementById("txtCantidad").textContent = total
}

function limpiarProducto(){
    document.getElementById('selectProducto').value = 0;
    document.getElementById('txtDescripcion').value = '';
    document.getElementById('txtPrecio').value = '';
    document.getElementById('txtCantidad').value = '';

} 