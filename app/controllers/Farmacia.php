<?php

class Farmacia extends Control{

    public function index(){

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/farmacia/inicio.css',
        ];

        $this->load_view('farmacia/inicio', $datos);
    }

    public function login($mensaje = null){

        $datos = [
            "title" => "Login",
            "css-ext" => '/css/farmacia/login.css',
            "mensaje" => $mensaje
        ];

        $this->load_view("farmacia/login", $datos);
    }


    //* Funciones de Ejecucion;
    public function iniciar_sesion(){
        
        $modelo = $this->load_model("Login");
        $conexion = $this->load_model("Comun");

        $usuario = trim($_POST["txtusuario"]);
        $contrasenia = trim($_POST["txtcontrasenia"]);

        $resp = $modelo->loguearse($usuario, $contrasenia);
        $dataGrafico = $conexion -> graficoProductos();

        if($resp['confirmacion'] == 1){
            session_start();

            $_SESSION['IdUsuario'] = $resp['id_usuario'];
            $_SESSION['Usuario'] = $resp['nombre_usuario'];
            $_SESSION['Tipousuario'] = $resp['tipo_usuario'];

            $datos = [
                'title' => 'Inicio',
                'css-ext' => '/css/mantenimiento/inicio.css',
                'dataGraficos' => $dataGrafico,
            ];
            
            $this->load_view('mantenimiento/inicio', $datos);
        }else{
            $this->login("Error");
        }
    }

    public function cerrar_sesion(){
        session_start();
        session_destroy();
        $this->login();
    }

}