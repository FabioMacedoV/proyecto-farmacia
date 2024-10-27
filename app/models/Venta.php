<?php

class Venta extends Control{

    private $db;

    public function __construct(){
        $this->db = $this->load_model("Conexion");
    }

    public function obtenerGrilla($nombre){

        $sql = "EXEC [dbo].[sp_obtener_informacion_venta] @nombre = :nombre";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

    public function obtenerVenta($id){
        $sql = "EXEC [dbo].[sp_obtenerventaporid] @venta_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function obtenerDetalleVenta($id){
        $sql = "EXEC [dbo].[sp_obtenerdetalleventaporid] @venta_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function obtenerProductoPorId($id){
        $sql = "EXEC [dbo].[sp_obtener_producto_por_id] @producto_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function agregarDatosVenta($data){
        $sql = "EXEC [dbo].[sp_obtener_producto_por_id] ";
    }

}