<?php

class Producto extends Control{

    private $db;

    public function __construct(){
        $this ->db =  $this-> load_model("Conexion");
    }

    public function obtenerGrilla($nombre){
        
        $sql = "EXEC [dbo].[sp_obtener_informacion_producto] @nombre = :nombre";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }
}