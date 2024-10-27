<?php

class Comun extends Control{

    private $db;

    public function __construct()
    {
        $this->db = $this-> load_model("Conexion");
    }

    public function obtenerRoles(){

        $sql = "EXEC [dbo].[sp_obtener_todos_roles_empleado]";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function obtenerCategorias(){

        $sql = "EXEC [dbo].[sp_obtener_todas_categorias]";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function obtenerMarcas(){
        
        $sql = "EXEC [dbo].[sp_obtener_todas_marcas]";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function obtenerProductos(){
        
        $sql = "EXEC [dbo].[sp_obtener_todos_productos]";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function obtenerHorarios(){

        $sql = "EXEC [dbo].[sp_obtener_todos_horarios]";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function obtenerProveedores(){
        $sql = 'EXEC [dbo].[sp_obtener_todos_proveedores]';

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function obtenerClientes(){
        $sql = 'EXEC [dbo].[sp_obtener_todos_clientes]';

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}