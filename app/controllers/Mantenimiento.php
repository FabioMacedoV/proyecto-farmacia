<?php

class Mantenimiento extends Control
{

    public function inicio()
    {
        $conexion = $this->load_model("GraficosEstadisticas");
        $ventaMes = $conexion->ventasMes();
        $productoVendido = $conexion->productoMasVendido();
        $ventaDiaria = $conexion->ventasDiaria();
        $clientesFrecuentes = $conexion->clientesFrecuentes();
        $cantidadVentasMes = $conexion->cantidadVentasMes();

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/mantenimiento/inicio.css',
            'ventaMes' => $ventaMes[0],
            'productoVendido' => $productoVendido[0],
            'ventaDiaria' => $ventaDiaria[0],
            'clientesFrecuentes' => $clientesFrecuentes,
            'cantidadVentasMes' => $cantidadVentasMes,
        ];

        $this->load_view('mantenimiento/inicio', $datos);
    }

    public function empleado()
    {
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';

        $conexion = $this->load_model("Empleado");

        $grilla = $conexion->obtenerGrilla($nombre);

        $datos = [
            'title' => 'Empleados',
            'css-ext' => '/css/mantenimiento/grid-view.css',
            'js-ext' => '/js/mantenimiento/empleado.js',
            'grid' => $grilla,
        ];

        $this->load_view('mantenimiento/empleado/grid-empleado', $datos);
    }

    public function registro_empleado()
    {

        $conexion = $this->load_model('Comun');
        $roles = $conexion->obtenerRoles();
        $horarios = $conexion->obtenerHorarios();

        $datos = [
            'title' => 'Registro Empleados',
            'css-ext' => '/css/mantenimiento/form-empleado.css',
            'js-ext' => '/js/mantenimiento/empleado.js',
            'tipoRegistro' => 0,
            'roles' => $roles,
            'horarios' => $horarios,
        ];

        $this->load_view('mantenimiento/empleado/form-empleado', $datos);
    }

    public function editar_empleado($ID)
    {

        $conexion = $this->load_model('Comun');
        $modeloEmpleado = $this->load_model('Empleado');

        $roles = $conexion->obtenerRoles();
        $horarios = $conexion->obtenerHorarios();
        $lista = $modeloEmpleado->obtenerEmpleado($ID);

        $empleado = $lista[0];

        $datos = [
            'title' => 'Actualizar Empleados',
            'css-ext' => '/css/mantenimiento/form-empleado.css',
            'js-ext' => '/js/mantenimiento/empleado.js',
            'tipoRegistro' => 1,
            'empleado' => $empleado,
            'roles' => $roles,
            'horarios' => $horarios,
        ];

        $this->load_view('mantenimiento/empleado/form-empleado', $datos);
    }

    public function guardar_empleado()
    {
        $modeloEmpleado = $this->load_model('Empleado');

        $nombre = trim($_POST['txtNombre']);
        $dni = trim($_POST['txtDni']);
        $apellidos = trim($_POST['txtApellidos']);
        $fechaNacimiento = trim($_POST['txtFechaNacimiento']);
        $direccion = trim($_POST['txtDireccion']);
        $celular = trim($_POST['txtCelular']);
        $correo = trim($_POST['txtCorreo']);
        $rol = trim($_POST['selectRol']);
        $salario = trim($_POST['txtSalario']);
        $inicioContrato = trim($_POST['dateIniContrato']);
        $horario = trim($_POST['selectHorario']);
        $finContrato = trim($_POST['dateFinContrato']);

        $data = [
            'nombre' => $nombre,
            'dni' => $dni,
            'apellidos' => $apellidos,
            'fechaNacimiento' => $fechaNacimiento,
            'direccion' => $direccion,
            'celular' => $celular,
            'correo' => $correo,
            'rol' => (int)$rol,
            'salario' => (int)$salario,
            'inicioContrato' => $inicioContrato,
            'horario' => (int)$horario,
            'finContrato' => $finContrato
        ];

        $resp = $modeloEmpleado->guardarEmpleado($data);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/empleado');
            exit();
        }
    }

    public function actualizar_empleado()
    {
        $modeloEmpleado = $this->load_model('Empleado');

        $id = trim($_POST['idEmpleado']);
        $nombre = trim($_POST['txtNombre']);
        $dni = trim($_POST['txtDni']);
        $apellidos = trim($_POST['txtApellidos']);
        $fechaNacimiento = trim($_POST['txtFechaNacimiento']);
        $direccion = trim($_POST['txtDireccion']);
        $celular = trim($_POST['txtCelular']);
        $correo = trim($_POST['txtCorreo']);
        $rol = trim($_POST['selectRol']);
        $salario = trim($_POST['txtSalario']);
        $inicioContrato = trim($_POST['dateIniContrato']);
        $horario = trim($_POST['selectHorario']);
        $finContrato = trim($_POST['dateFinContrato']);

        $data = [
            'id' => (int)$id,
            'nombre' => $nombre,
            'dni' => $dni,
            'apellidos' => $apellidos,
            'fechaNacimiento' => $fechaNacimiento,
            'direccion' => $direccion,
            'celular' => $celular,
            'correo' => $correo,
            'rol' => (int)$rol,
            'salario' => (int)$salario,
            'inicioContrato' => $inicioContrato,
            'horario' => (int)$horario,
            'finContrato' => $finContrato
        ];

        $resp = $modeloEmpleado->actualizarEmpleado($data);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/empleado');
            exit();
        }
    }

    public function eliminar_empleado($ID)
    {
        $modeloEmpleado = $this->load_model('Empleado');

        $resp = $modeloEmpleado->eliminarEmpleado($ID);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/empleado');
            exit();
        }
    }

    public function visualizar_empleado($ID)
    {
        $conexion = $this->load_model('Comun');
        $modeloEmpleado = $this->load_model('Empleado');

        $roles = $conexion->obtenerRoles();
        $horarios = $conexion->obtenerHorarios();
        $lista = $modeloEmpleado->obtenerEmpleado($ID);

        $empleado = $lista[0];

        $datos = [
            'title' => 'Actualizar Empleados',
            'css-ext' => '/css/mantenimiento/form-empleado.css',
            'js-ext' => '/js/mantenimiento/empleado.js',
            'tipoRegistro' => 2,
            'empleado' => $empleado,
            'roles' => $roles,
            'horarios' => $horarios,
        ];

        $this->load_view('mantenimiento/empleado/form-empleado', $datos);
    }

    public function producto()
    {

        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';

        $conexion = $this->load_model("Producto");

        $grilla = $conexion->obtenerGrilla($nombre);

        $datos = [
            'title' => 'Productos',
            'css-ext' => '/css/mantenimiento/grid-view.css',
            'js-ext' => '/js/mantenimiento/producto.js',
            'grid' => $grilla,
        ];

        $this->load_view('mantenimiento/producto/grid-producto', $datos);
    }

    public function registro_producto()
    {

        $conexion = $this->load_model('Comun');
        $categorias = $conexion->obtenerCategorias();
        $marcas = $conexion->obtenerMarcas();
        $proveedores = $conexion->obtenerProveedores();

        $datos = [
            'title' => 'Registro Productos',
            'css-ext' => '/css/mantenimiento/form-producto.css',
            'js-ext' => '/js/mantenimiento/producto.js',
            'tipoRegistro' => 0,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
        ];

        $this->load_view('mantenimiento/producto/form-producto', $datos);
    }

    public function editar_producto($ID)
    {
        $conexion = $this->load_model('Comun');
        $modeloProducto = $this->load_model('Producto');

        $categorias = $conexion->obtenerCategorias();
        $marcas = $conexion->obtenerMarcas();
        $proveedores = $conexion->obtenerProveedores();
        $lista = $modeloProducto->obtenerProducto($ID);

        $datos = [
            'title' => 'Registro Productos',
            'css-ext' => '/css/mantenimiento/form-producto.css',
            'js-ext' => '/js/mantenimiento/producto.js',
            'tipoRegistro' => 1,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
            'producto' => $lista[0],
        ];

        $this->load_view('mantenimiento/producto/form-producto', $datos);
    }

    public function guardar_producto()
    {
        $modeloProducto = $this->load_model('Producto');

        $nombre = trim($_POST['txtNombre']);
        $categoria = trim($_POST['selectCategoria']);
        $marca = trim($_POST['selectMarca']);
        $precio = trim($_POST['txtPrecio']);
        $stock = trim($_POST['txtStock']);
        $fechaVencimiento = trim($_POST['dateFechaVencimiento']);
        $descripcion = trim($_POST['txtDescripcion']);
        $proveedor = trim($_POST['selectProveedor']);
        $indicaciones = trim($_POST['txtIndicaciones']);
        $contradiccion = trim($_POST['txtContradiccion']);

        $data = [
            'nombre' => $nombre,
            'categoria' => $categoria,
            'marca' => $marca,
            'precio' => $precio,
            'stock' => $stock,
            'fechaVencimiento' => $fechaVencimiento,
            'descripcion' => $descripcion,
            'proveedor' => (int)$proveedor,
            'indicaciones' => (int)$indicaciones,
            'contradiccion' => $contradiccion,
        ];

        $resp = $modeloProducto->guardarProducto($data);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/producto');
            exit();
        }
    }
    public function actualizar_producto()
    {
        $modeloProducto = $this->load_model('Producto');

        $id = trim($_POST['idProducto']);
        $nombre = trim($_POST['txtNombre']);
        $categoria = trim($_POST['selectCategoria']);
        $marca = trim($_POST['selectMarca']);
        $precio = trim($_POST['txtPrecio']);
        $stock = trim($_POST['txtStock']);
        $fechaVencimiento = trim($_POST['dateFechaVencimiento']);
        $descripcion = trim($_POST['txtDescripcion']);
        $proveedor = trim($_POST['selectProveedor']);
        $indicaciones = trim($_POST['txtIndicaciones']);
        $contradiccion = trim($_POST['txtContradiccion']);

        $data = [
            'id' => $id,
            'nombre' => $nombre,
            'categoria' => $categoria,
            'marca' => $marca,
            'precio' => $precio,
            'stock' => $stock,
            'fechaVencimiento' => $fechaVencimiento,
            'descripcion' => $descripcion,
            'proveedor' => (int)$proveedor,
            'indicaciones' => (int)$indicaciones,
            'contradiccion' => $contradiccion,
        ];

        $resp = $modeloProducto->actualizarProducto($data);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/producto');
            exit();
        }
    }

    public function eliminar_producto($ID)
    {
        $modeloProducto = $this->load_model('Producto');

        $resp = $modeloProducto->eliminarProducto($ID);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/producto');
            exit();
        }
    }

    public function visualizar_producto($ID)
    {
        $conexion = $this->load_model('Comun');
        $modeloProducto = $this->load_model('Producto');

        $categorias = $conexion->obtenerCategorias();
        $marcas = $conexion->obtenerMarcas();
        $proveedores = $conexion->obtenerProveedores();
        $lista = $modeloProducto->obtenerProducto($ID);

        $datos = [
            'title' => 'Registro Productos',
            'css-ext' => '/css/mantenimiento/form-producto.css',
            'js-ext' => '/js/mantenimiento/producto.js',
            'tipoRegistro' => 2,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
            'producto' => $lista[0],
        ];

        $this->load_view('mantenimiento/producto/form-producto', $datos);
    }

    public function inventario()
    {
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';

        $conexion = $this->load_model('Inventario');

        $grilla = $conexion->obtenerGrilla($nombre);

        $datos = [
            'title' => 'Inventario',
            'css-ext' => '/css/mantenimiento/grid-view.css',
            'js-ext' => '/js/mantenimiento/inventario.js',
            'grid' => $grilla,
        ];

        $this->load_view('mantenimiento/inventario/grid-inventario', $datos);
    }

    public function venta()
    {

        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';

        $conexion = $this->load_model('Venta');

        $grilla = $conexion->obtenerGrilla($nombre);

        $datos = [
            'title' => 'Ventas',
            'css-ext' => '/css/mantenimiento/grid-view.css',
            'js-ext' => '/js/mantenimiento/venta.js',
            'grid' => $grilla,
        ];

        $this->load_view('venta/grid-ventas', $datos);
    }

    public function registrar_venta()
    {
        $conexion = $this->load_model('Comun');

        $productos = $conexion->obtenerProductos();
        $clientes = $conexion->obtenerClientes();

        $datos = [
            'title' => 'Orden Venta',
            'css-ext' => '/css/mantenimiento/orden-venta.css',
            'js-ext-extra' => '/js/mantenimiento/venta.js',
            'tipoRegistro' => 0,
            'tipo-documento' => [
                ["value" => 1, "label" => "Boleta"],
                ["value" => 2, "label" => "Factura"],
            ],
            'productos' => $productos,
            'clientes' => $clientes,
        ];

        $this->load_view('venta/orden-venta', $datos);
    }

    public function buscar_producto()
    {
        if (isset($_GET['producto'])) {
            $producto = $_GET['producto'];
            $modeloVenta = $this->load_model('Venta');

            $dato = $modeloVenta->obtenerProductoPorId($producto);
            if ($dato) {
                echo json_encode([
                    'success' => true,
                    'modelProducto' => $dato
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Producto no encontrado'
                ]);
            }
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Parámetro producto no especificado'
            ]);
        }
    }

    public function agregar_venta()
    {
        $modeloVenta = $this->load_model('Venta');
        $data = json_decode(file_get_contents('php://input'), true);

        $documento = $data['documento'];
        $fecha = $data['fecha'];
        $numero = $data['numero'];
        $cliente = $data['cliente'];
        $trabajador = $data['trabajador'];
        $listaProductos = $data['listaProductos'];
        $impuesto = $data['impuesto'];
        $descuento = $data['descuento'];
        $total = $data['total'];

        $dataVenta = [
            'documento' => (int)$documento,
            'numero' => $numero,
            'fecha' => $fecha,
            'cliente' => (int)$cliente,
            'empleado' => (int)$trabajador,
            'total' => $total,
        ];

        $id = $modeloVenta->agregarDatosVenta($dataVenta);

        if ($id) {
            foreach ($listaProductos as $producto) {

                $dataproducto = [
                    'cantidad' => $producto['cantidad'],
                    'precio' => $producto['precio'],
                    'impuestos' => $impuesto,
                    'descuentos' => $descuento,
                    'producto' => $producto['id']
                ];

                $resp = $modeloVenta->agregarDetalleVenta($dataproducto);
            }

        echo json_encode([
            'success' => true,
            'modelProducto' => 'Hecho exitosamente',
        ]);
        
        }else{
            echo json_encode([
                'success' => false,
                'modelProducto' => 'Error en el sistema',
            ]);
        }
    }

    public function orden_venta($id)
    {
        $conexion = $this->load_model('Comun');
        $modeloVenta = $this->load_model('Venta');

        $info = $modeloVenta->obtenerVenta($id);
        $grid = $modeloVenta->obtenerDetalleVenta($id);

        $productos = $conexion->obtenerProductos();
        $clientes = $conexion->obtenerClientes();

        $datos = [
            'title' => 'Orden Venta',
            'css-ext' => '/css/mantenimiento/orden-venta.css',
            'venta' => $info[0],
            'grid' => $grid,
            'tipoRegistro' => 1,
            'tipo-documento' => [
                ["value" => 1, "label" => "Boleta"],
                ["value" => 2, "label" => "Factura"],
            ],
            'productos' => $productos,
            'clientes' => $clientes,
        ];
        $this->load_view('venta/orden-venta', $datos);
    }

    public function cliente()
    {
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';

        $conexion = $this->load_model('Cliente');

        $grilla = $conexion->obtenerGrilla($nombre);

        $datos = [
            'title' => 'Clientes',
            'css-ext' => '/css/mantenimiento/grid-view.css',
            'js-ext' => '/js/mantenimiento/cliente.js',
            'grid' => $grilla,
        ];

        $this->load_view('mantenimiento/cliente/grid-clientes', $datos);
    }

    public function registro_cliente()
    {

        $datos = [
            'title' => 'Registro Cliente',
            'css-ext' => '/css/mantenimiento/form-clientes.css',
            'js-ext' => '/js/mantenimiento/cliente.js',
            'tipoRegistro' => 0,
        ];

        $this->load_view('mantenimiento/cliente/form-clientes', $datos);
    }

    public function editar_cliente($ID)
    {
        $modeloCliente = $this->load_model('Cliente');

        $cliente = $modeloCliente->obtenerCliente($ID);

        $datos = [
            'title' => 'Registro Cliente',
            'css-ext' => '/css/mantenimiento/form-clientes.css',
            'js-ext' => '/js/mantenimiento/cliente.js',
            'tipoRegistro' => 1,
            'cliente' => $cliente[0],
        ];

        $this->load_view('mantenimiento/cliente/form-clientes', $datos);
    }

    public function guardar_cliente()
    {
        $modeloCliente = $this->load_model('Cliente');

        $nombre = trim($_POST['txtNombre']);
        $dni = trim($_POST['txtDni']);
        $apellidos = trim($_POST['txtApellidos']);
        $celular = trim($_POST['txtCelular']);
        $email = trim($_POST['txtEmail']);

        $data = [
            'nombre' => $nombre,
            'dni' => $dni,
            'apellidos' => $apellidos,
            'celular' => $celular,
            'email' => $email,
        ];

        $resp = $modeloCliente->guardarCliente($data);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/cliente');
            exit();
        }
    }

    public function actualizar_cliente()
    {
        $modeloCliente = $this->load_model('Cliente');

        $id = trim($_POST['idCliente']);
        $nombre = trim($_POST['txtNombre']);
        $dni = trim($_POST['txtDni']);
        $apellidos = trim($_POST['txtApellidos']);
        $celular = trim($_POST['txtCelular']);
        $email = trim($_POST['txtEmail']);

        $data = [
            'id' => $id,
            'nombre' => $nombre,
            'dni' => $dni,
            'apellidos' => $apellidos,
            'celular' => $celular,
            'email' => $email,
        ];

        $resp = $modeloCliente->actualizarCliente($data);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/cliente');
            exit();
        }
    }

    public function eliminar_cliente($ID)
    {
        $modeloCliente = $this->load_model('Cliente');

        $resp = $modeloCliente->eliminarCliente($ID);

        if ($resp) {
            header("Location: " . URL . '/mantenimiento/cliente');
            exit();
        }
    }

    public function visualizar_cliente($ID)
    {
        $modeloCliente = $this->load_model('Cliente');

        $cliente = $modeloCliente->obtenerCliente($ID);

        $datos = [
            'title' => 'Registro Cliente',
            'css-ext' => '/css/mantenimiento/form-clientes.css',
            'js-ext' => '/js/mantenimiento/cliente.js',
            'tipoRegistro' => 2,
            'cliente' => $cliente[0],
        ];

        $this->load_view('mantenimiento/cliente/form-clientes', $datos);
    }
}
