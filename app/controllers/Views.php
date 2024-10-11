<?php
//* Plantill,a del proyecto
class Views extends Control
{
    public function index(){
        $datos = [
            "title" => "Inicio"
        ];

        $this->load_view('login', $datos);
    }

    public function inicio()
    {
        // $conexion = $this->load_model("Conexion");
        // $conn = $conexion->ConexionDB();

        $datos = [
            "title" => "Inicio",
            // "conexion" => $conn
        ];

        $this->load_view('inicio', $datos);
    }

    public function update($id)
    {
        echo "Update view " . $id;
    }

}