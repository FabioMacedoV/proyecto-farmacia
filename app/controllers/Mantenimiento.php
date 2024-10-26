<?php

class Mantenimiento extends Control{

    public function inicio(){ 
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
            'productoVendido'=> $productoVendido[0],
            'ventaDiaria'=> $ventaDiaria[0],
            'clientesFrecuentes'=> $clientesFrecuentes,
            'cantidadVentasMes'=> $cantidadVentasMes,
        ];

        $this->load_view('mantenimiento/inicio', $datos);
    }

    public function empleado(){
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : ''; 

        $conexion = $this->load_model("Empleado");

        $grilla = $conexion->obtenerGrilla($nombre);

        $datos = [
            'title' => 'Empleados',
            'css-ext' => '/css/mantenimiento/grid-view.css',
            'js-ext'=>'/js/mantenimiento/empleado.js',
            'grid' => $grilla,
        ];

        $this->load_view('mantenimiento/empleado/grid-empleado', $datos);
    }

    public function registro_empleado(){

        $conexion = $this->load_model('Comun');
        $roles = $conexion -> obtenerRoles();
        $horarios = $conexion -> obtenerHorarios();

        $datos = [
            'title' => 'Registro Empleados',
            'css-ext' => '/css/mantenimiento/form-empleado.css',
            'js-ext'=>'/js/mantenimiento/empleado.js',
            'tipoRegistro' => 0,
            'roles' => $roles,
            'horarios' => $horarios,
        ];

        $this->load_view('mantenimiento/empleado/form-empleado', $datos);
    }

    public function editar_empleado($ID){

        $conexion = $this->load_model('Comun');
        $modeloEmpleado = $this->load_model('Empleado');

        $roles = $conexion -> obtenerRoles();
        $horarios = $conexion -> obtenerHorarios();
        $lista = $modeloEmpleado->obtenerEmpleado($ID);

        $empleado = $lista[0];

        $datos = [
            'title' => 'Actualizar Empleados',
            'css-ext' => '/css/mantenimiento/form-empleado.css',
            'js-ext'=>'/js/mantenimiento/empleado.js',
            'tipoRegistro' => 1,
            'empleado' => $empleado,
            'roles' => $roles,
            'horarios' => $horarios,
        ];

        $this->load_view('mantenimiento/empleado/form-empleado', $datos);
    }

    public function guardar_empleado(){
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

        if($resp){
            header("Location: ".URL.'/mantenimiento/empleado');
            exit();
        }

    }

    public function actualizar_empleado(){
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

        if($resp){
            header("Location: ".URL.'/mantenimiento/empleado');
            exit();
        }
    }

    public function eliminar_empleado($ID){
        $modeloEmpleado = $this->load_model('Empleado');

        $resp = $modeloEmpleado->eliminarEmpleado($ID);

        if($resp){
            header("Location: ".URL.'/mantenimiento/empleado');
            exit();
        }
    }

    public function visualizar_empleado($ID){
        $conexion = $this->load_model('Comun');
        $modeloEmpleado = $this->load_model('Empleado');

        $roles = $conexion -> obtenerRoles();
        $horarios = $conexion -> obtenerHorarios();
        $lista = $modeloEmpleado->obtenerEmpleado($ID);

        $empleado = $lista[0];

        $datos = [
            'title' => 'Actualizar Empleados',
            'css-ext' => '/css/mantenimiento/form-empleado.css',
            'js-ext'=>'/js/mantenimiento/empleado.js',
            'tipoRegistro' => 2,
            'empleado' => $empleado,
            'roles' => $roles,
            'horarios' => $horarios,
        ];

        $this->load_view('mantenimiento/form-empleado', $datos);
    }

    public function producto(){

        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';

        $conexion = $this->load_model("Producto");

        $grilla = $conexion->obtenerGrilla($nombre);

        $datos = [
            'title' => 'Productos',
            'css-ext' => '/css/mantenimiento/grid-view.css',
            'js-ext'=>'/js/mantenimiento/producto.js',
            'grid' => $grilla,
        ];

        $this->load_view('mantenimiento/producto/grid-producto', $datos);
    }

    public function registro_producto(){

        $conexion = $this->load_model('Comun');
        $categorias = $conexion -> obtenerCategorias();
        $marcas = $conexion -> obtenerMarcas();
        $proveedores = $conexion -> obtenerProveedores();

        $datos = [
            'title' => 'Registro Productos',
            'css-ext' => '/css/mantenimiento/form-producto.css',
            'js-ext'=>'/js/mantenimiento/producto.js',
            'tipoRegistro' => 0,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
        ];

        $this->load_view('mantenimiento/producto/form-producto', $datos);

    }

    public function editar_producto($ID){
        $conexion = $this->load_model('Comun');
        $modeloProducto = $this->load_model('Producto');

        $categorias = $conexion -> obtenerCategorias();
        $marcas = $conexion -> obtenerMarcas();
        $proveedores = $conexion -> obtenerProveedores();
        $lista = $modeloProducto -> obtenerProducto($ID);

        $datos = [
            'title' => 'Registro Productos',
            'css-ext' => '/css/mantenimiento/form-producto.css',
            'js-ext'=>'/js/mantenimiento/producto.js',
            'tipoRegistro' => 1,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
            'producto' => $lista[0],
        ];

        $this->load_view('mantenimiento/producto/form-producto', $datos);
    }

    public function guardar_producto(){
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

        if($resp){
            header("Location: ".URL.'/mantenimiento/producto');
            exit();
        }
        
    }
    public function actualizar_producto(){
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
            'id'=> $id,
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

        if($resp){
            header("Location: ".URL.'/mantenimiento/producto');
            exit();
        }
    }

    public function eliminar_producto($ID){
        $modeloProducto = $this->load_model('Producto');

        $resp = $modeloProducto->eliminarProducto($ID);

        if($resp){
            header("Location: ".URL.'/mantenimiento/producto');
            exit();
        }
    }

    public function visualizar_producto($ID){
        $conexion = $this->load_model('Comun');
        $modeloProducto = $this->load_model('Producto');

        $categorias = $conexion -> obtenerCategorias();
        $marcas = $conexion -> obtenerMarcas();
        $proveedores = $conexion -> obtenerProveedores();
        $lista = $modeloProducto -> obtenerProducto($ID);

        $datos = [
            'title' => 'Registro Productos',
            'css-ext' => '/css/mantenimiento/form-producto.css',
            'js-ext'=>'/js/mantenimiento/producto.js',
            'tipoRegistro' => 2,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
            'producto' => $lista[0],
        ];

        $this->load_view('mantenimiento/producto/form-producto', $datos);
    }

    public function inventario(){
        $datos = [
            'title' => 'Inventario',
            'css-ext' => '/css/mantenimiento/grid-inventario.css',
            'grid' => [
                ["id" => "01", "nombre" => "Nombre1", "fecha_ingreso" => '01/01/2024', "cantidad" => "450", "fecha_salida" => "30/01/2024"],
                ["id" => "02", "nombre" => "Nombre2", "fecha_ingreso" => '01/01/2024', "cantidad" => "300", "fecha_salida" => "30/01/2024"],
            ]
        ];

        $this->load_view('mantenimiento/grid-inventario', $datos);
    }

    public function ventas(){
        $datos = [
            'title' => 'Ventas',
            'css-ext' => '/css/mantenimiento/grid-ventas.css',
            'grid' => [
                ["id" => "01", "fecha" => '01/01/2024', "total" => "150.30", "cliente" => "Cliente 1", "trabajador" => "Trabajador 01", "producto" => "Producto 01"],
                ["id" => "02", "fecha" => '01/01/2024', "total" => "220.50", "cliente" => "Cliente 2", "trabajador" => "Trabajador 02", "producto" => "Producto 02"],
            ]
        ];

        $this->load_view('mantenimiento/grid-ventas', $datos);
    }

    public function detalle_ventas($id){
        $datos = [
            'title' => 'Detalle Ventas',
            'css-ext' => '/css/mantenimiento/detalle-ventas.css',
            'grid' => [
                ["id" => "01", "fecha" => '01/01/2024', "total" => "150.30", "cliente" => "Cliente 1", "trabajador" => "Trabajador 01", "producto" => "Producto 01"],
                ["id" => "02", "fecha" => '01/01/2024', "total" => "220.50", "cliente" => "Cliente 2", "trabajador" => "Trabajador 02", "producto" => "Producto 02"],
            ]
        ];

        $this->load_view('mantenimiento/detalle-ventas', $datos);
    }

    public function orden_venta(){

        $conexion = $this->load_model('Comun');
        $productos = $conexion -> obtenerProductos();

        $datos = [
            'title' => 'Orden Venta',
            'css-ext' => '/css/mantenimiento/orden-venta.css',
            'grid-productos'=> [],
            'tipo-documento' => [
                ["value" => 1, "label" => "Boleta"],
                ["value" => 2, "label" => "Factura"],
            ],
            'productos' => $productos,
        ];

        $this->load_view('mantenimiento/orden-venta', $datos);

    }

    public function clientes(){
        $datos = [
            'title' => 'Clientes',
            'css-ext' => '/css/mantenimiento/grid-clientes.css',
            'grid' => [
                ["dni" => "87654321", "nombre" => 'Nombre 01', "apellido_paterno" => "Apellido P1", "apellido_materno" => "Apellido M1", "celular" => "987654321"],
                ["dni" => "12345678", "nombre" => 'Nombre 02', "apellido_paterno" => "Apellido P2", "apellido_materno" => "Apellido M2", "celular" => "123456789"],
            ]
        ];

        $this->load_view('mantenimiento/grid-clientes', $datos);
    }

    public function registro_clientes(){

        $datos = [
            'title' => 'Registro Clientes',
            'css-ext' => '/css/mantenimiento/form-clientes.css',
        ];

        $this->load_view('mantenimiento/form-clientes', $datos);

    }

}