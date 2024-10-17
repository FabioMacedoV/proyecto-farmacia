<?php

class Mantenimiento extends Control{

    public function inicio(){
        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/mantenimiento/inicio.css',
        ];

        $this->load_view('mantenimiento/inicio', $datos);
    }

    public function empleado(){
        $datos = [
            'title' => 'Empleados',
            'css-ext' => '/css/mantenimiento/grid-empleado.css',
            'grid' => [
                ["id" => "T001", "nombre" => "Nombre1", "edad" => 45, "cargo" => "empleado", "salario" => "4500"],
                ["id" => "T002", "nombre" => "Nombre2", "edad" => 23, "cargo" => "cajero", "salario" => "2500"],
            ]
        ];

        $this->load_view('mantenimiento/grid-empleado', $datos);
    }

    public function registro_empleado(){

        $datos = [
            'title' => 'Registro Empleados',
            'css-ext' => '/css/mantenimiento/form-empleado.css',
            'roles' => [
                ["value" => 1, "label" => "Rol 1"],
                ["value" => 2, "label" => "Rol 2"],
                ["value" => 3, "label" => "Rol 3"],
            ],
        ];

        $this->load_view('mantenimiento/form-empleado', $datos);

    }

    public function producto(){

        $datos = [
            'title' => 'Productos',
            'css-ext' => '/css/mantenimiento/grid-producto.css',
            'grid' => [
                ["id" => "01", "nombre" => "Nombre1", "descripcion" => 'Descripcion1', "precio" => "5.99", "marca" => "Marca 1", "categoria" => 'Categoria1'],
                ["id" => "02", "nombre" => "Nombre2", "descripcion" => 'Descripcion2', "precio" => "14.50", "marca" => "Marca 2", "categoria" => 'Categoria2'],
            ]
        ];

        $this->load_view('mantenimiento/grid-producto', $datos);
    }

    public function registro_producto(){

        $datos = [
            'title' => 'Registro Productos',
            'css-ext' => '/css/mantenimiento/form-producto.css',
        ];

        $this->load_view('mantenimiento/form-producto', $datos);

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

        $datos = [
            'title' => 'Orden Venta',
            'css-ext' => '/css/mantenimiento/orden-venta.css',
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