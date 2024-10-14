<?php

class Farmacia extends Control{

    public function index(){

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/farmacia/inicio.css',
        ];

        $this->load_view('farmacia/inicio', $datos);
    }

    public function login(){

        $datos = [
            "title" => "Login",
            "css-ext" => '/css/farmacia/login.css'
        ];

        $this->load_view("farmacia/login", $datos);
    }


    //* Funciones de Ejecucion;
    public function iniciar_sesion(){

        $modelo = $this->load_model("Login");

        $usuario = trim($_POST["txtusuario"]);
        $contrasenia = trim($_POST["txtcontrasenia"]);

        $resp = $modelo->loguearse($usuario, $contrasenia);

        if($resp){
            $datos = [
                'title' => 'Inicio',
                'css-ext' => '/css/mantenimiento/inicio.css',
            ];

            $this->load_view('mantenimiento/inicio', $datos);
        }else{
            $this->login();
        }
    }

}