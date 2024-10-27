<?php

class Inventario extends Control{

    private $db;

    public function __construct(){
        $this->db = $this->load_model("Conexion");
    }

    public function obtenerGrilla($nombre){
        $sql = "EXEC [dbo].[sp_obtener_informacion_inventario] @nombre = :nombre";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function obtenerTodosProductos() {
        $sql = "EXEC [dbo].[sp_obtener_todos_productos]";
    
        $this->db->conectar();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtiene todos los productos como un arreglo asociativo
        return $productos;
    }

    public function obtenerInventarioPorProducto($producto_id)
    {
        $sql = "EXEC [dbo].[sp_informacíon_inventario_por_producto] @producto_id = :producto_id";

        $this->db->conectar();
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC); // Obtiene el producto como un arreglo asociativo
    }

    

}