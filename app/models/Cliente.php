<?php

class Cliente extends Control{

    private $db;

    public function __construct(){
        $this->db = $this-> load_model("Conexion");
    }

    public function obtenerGrilla($nombre){
        $sql = "EXEC [dbo].[sp_obtener_informacion_cliente] @nombre = :nombre";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function obtenerCliente($id){
        $sql = "EXEC [dbo].[sp_obtenerclienteporid] @cliente_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function guardarCliente($data){
        $sql = "EXEC [dbo].[sp_insertar_cliente]
        @nombre = :nombre,
        @apellidos = :apellidos,
        @dni = :dni,
        @celular = :celular,
        @email = :email";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":dni", $data['dni'], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $data['apellidos'], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $data['celular'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);

        $stmt->execute();
        return true;
    }

    public function actualizarCliente($data){
        $sql = 'EXEC [dbo].[sp_actualizar_cliente]
        @cliente_id = :id,
        @nombre = :nombre,
        @apellidos = :apellidos,
        @dni = :dni,
        @celular = :celular,
        @email = :email';
        
        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $data['id'], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":dni", $data['dni'], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $data['apellidos'], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $data['celular'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);

        $stmt->execute();
        return true;
    }

    public function eliminarCliente($id){
        $sql = 'EXEC [dbo].[sp_eliminar_cliente] @cliente_id = :id';

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return true;
    }
}