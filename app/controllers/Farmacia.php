<?php

class Farmacia extends Control{

    public function index(){

        // $conexion = $this->load_model("Conexion");
        // $conn = $conexion->ConexionDB();

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/farmacia/inicio.css',
            // "conexion" => $conn
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

}