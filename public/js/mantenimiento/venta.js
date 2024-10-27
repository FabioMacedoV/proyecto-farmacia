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

function calcularTotales(){
    const totalP = productos.reduce((sum, producto) => sum + (parseFloat(producto.precio) * parseInt(producto.cantidad)), 0);
    document.getElementById("txtTotal").value = totalP.toFixed(2);
}

function limpiarProducto(){
    document.getElementById('selectProducto').value = 0;
    document.getElementById('txtStock').value = '';
    document.getElementById('txtDescripcion').value = '';
    document.getElementById('txtPrecio').value = '';
    document.getElementById('txtCantidad').value = '';
} 

function calcularDescuento(event){
    let descuento = event.target.value;
    
    if(descuento.length != 1){
        descuento = descuento / 100

        let totalBruto = document.getElementById("txtTotal").value
    
        let newTotal = totalBruto - (totalBruto * descuento);
    
        document.getElementById("txtTotal").value = newTotal.toFixed(2);
    }
}

function calcularImpuesto(event){
    let Impuesto = event.target.value;

    if(Impuesto.length != 1){

        Impuesto = Impuesto / 100;

        let totalCompleto = document.getElementById("txtTotal").value

        let newTotalCompleto = parseFloat(totalCompleto) + (parseFloat(totalCompleto) * Impuesto);

        document.getElementById("txtTotal").value = newTotalCompleto.toFixed(2);
    }
}

const descuentoInput = document.getElementById('txtDescuento');
const impuestoInput = document.getElementById('txtInpuesto');

descuentoInput.addEventListener('input', calcularDescuento);
impuestoInput.addEventListener('input', calcularImpuesto);

function guardarVenta(){
    const documento = document.getElementById('selectDoc').value;
    const fecha = document.getElementById('fcFecha').value;
    const numero = document.getElementById('txtNumero').value;
    const cliente = document.getElementById('selectCliente').value;
    const trabajador = idTrabajador;
    const listaProductos = productos;
    const impuesto = document .getElementById("txtInpuesto").value;
    const descuento = document .getElementById("txtDescuento").value;
    const total = document .getElementById("txtTotal").value;

    const data ={
        documento,
        fecha,
        numero,
        cliente,
        trabajador,
        listaProductos,
        impuesto,
        descuento,
        total
    }

    fetch('http://localhost:8080/proyecto-farmacia/mantenimiento/agregar_venta', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        window.location.href = 'venta';
    })
}