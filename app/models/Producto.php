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

    public function obtenerProducto($id){

        $sql = "EXEC [dbo].[sp_obtenerproductoporid] @producto_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

    public function guardarProducto($data){

        $sql="EXEC [dbo].[sp_insertar_producto]
        @nombre = :nombre,
        @descripcion = :descripcion,
        @indicaciones = :indicaciones,
        @contraindicaciones = :contraindicaciones,
        @fechaVencimiento = :fechaVencimiento,
        @precio = :precio,
        @stock = :stock,
        @categoria_id = :id_categoria,
        @marca_id = :id_marca,
        @proveedor_id = :id_proveedor";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $data['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(":indicaciones", $data['indicaciones'], PDO::PARAM_STR);
        $stmt->bindParam(":contraindicaciones", $data['contradiccion'], PDO::PARAM_STR);
        $stmt->bindParam(":fechaVencimiento", $data['fechaVencimiento'], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $data['precio'], PDO::PARAM_STR);
        $stmt->bindParam(":stock", $data['stock'], PDO::PARAM_INT);
        $stmt->bindParam(":id_categoria", $data['categoria'], PDO::PARAM_INT);
        $stmt->bindParam(":id_marca", $data['marca'], PDO::PARAM_INT);
        $stmt->bindParam(":id_proveedor", $data['proveedor'], PDO::PARAM_INT);
        
        $stmt->execute();
        return true;
    }

    public function actualizarProducto($data){
        $sql= 'EXEC [dbo].[sp_actualizar_producto]
        @producto_id = :id,
        @nombre = :nombre,
        @descripcion = :descripcion,
        @indicaciones = :indicaciones,
        @contraindicaciones = :contraindicaciones,
        @fechaVencimiento = :fechaVencimiento,
        @precio = :precio,
        @stock = :stock,
        @categoria_id = :id_categoria,
        @marca_id = :id_marca,
        @proveedor_id = :id_proveedor';

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $data['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(":indicaciones", $data['indicaciones'], PDO::PARAM_STR);
        $stmt->bindParam(":contraindicaciones", $data['contradiccion'], PDO::PARAM_STR);
        $stmt->bindParam(":fechaVencimiento", $data['fechaVencimiento'], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $data['precio'], PDO::PARAM_STR);
        $stmt->bindParam(":stock", $data['stock'], PDO::PARAM_INT);
        $stmt->bindParam(":id_categoria", $data['categoria'], PDO::PARAM_INT);
        $stmt->bindParam(":id_marca", $data['marca'], PDO::PARAM_INT);
        $stmt->bindParam(":id_proveedor", $data['proveedor'], PDO::PARAM_INT);

        $stmt->execute();
        return true;
    }

    public function eliminarProducto($ID){
        $sql = 'EXEC [dbo].[sp_eliminar_producto] @producto_id = :id';

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $ID, PDO::PARAM_STR);

        $stmt->execute();
        return true;
    }
}